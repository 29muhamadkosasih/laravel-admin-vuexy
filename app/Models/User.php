<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    static function boot()
    {
        parent::boot();

        static::created(function (Model $model) {
            if ($model->role_id == "") {
                $model->update([
                    'role_id' => Role::where('title', 'user')->first()->id,
                ]);
            }
        });
    }

    public function user()
    {
        return $this->hasMany(Form::class);
    }

    public function checked()
    {
        return $this->hasMany(Form::class);
    }

    public function approve()
    {
        return $this->hasMany(Form::class);
    }

    public function userNorek()
    {
        return $this->hasMany(NoRek::class);
    }
    
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}