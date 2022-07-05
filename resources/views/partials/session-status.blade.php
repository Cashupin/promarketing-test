@if (session('status-ok'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{{ session('status-ok') }}",
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif
@if (session('status-error'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: "{{ session('status-error') }}",
            showConfirmButton: false,
            timer: 2000
        })
    </script>
@endif
