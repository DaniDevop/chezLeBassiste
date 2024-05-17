<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Placez votre script ruang-admin.min.js ici -->
<script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src=" {{ asset('vendor/jquery-easing/jquery.easing.min.js') }} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Vos autres scripts -->
<script src=" {{ asset('js/ruang-admin.min.js') }} "></script>

<script>
    // code Toastr ici
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
