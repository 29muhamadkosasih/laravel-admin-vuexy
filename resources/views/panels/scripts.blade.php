<script src="{{ asset('plugins/common/common.min.js') }}"></script>
<script src="{{ asset('plugins/js/custom.min.js') }}"></script>
<script src="{{ asset('plugins/js/settings.js') }}"></script>
<script src="{{ asset('plugins/js/gleek.js') }}"></script>
<script src="{{ asset('plugins/js/styleSwitcher.js') }}"></script>
<script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{ asset('assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-ecommerce.js')}}"></script>
<script src="{{ asset('assets/js/form-layouts.js') }}"></script>
<script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>

<script src="{{ asset('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('assets/demo/chart-bar-demo.js')}}"></script>
<script src="{{ asset('assets/demo/donut.js')}}"></script>


<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/toastr/toastr.js')}}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/ui-toasts.js') }}"></script>

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/pages-auth.js') }}"></script>

<script>
    $(window).on('load', function () {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })

            @if(Session::has('success'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.success("{{ session('success') }}");
            @endif

            @if(Session::has('error'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.warning("{{ session('warning') }}");
            @endif
</script>
