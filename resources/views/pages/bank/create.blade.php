<form action="{{ route('bank.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Bank</label>
        <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" placeholder="Masukan Nama Bank"
            name="nama_bank" value="{{ old('nama_bank') }}" />
        @error('nama_bank')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
</form>
