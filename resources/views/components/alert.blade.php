<script>
    @if(\Session::has('error'))
        toastr.error('{{ \Illuminate\Support\Facades\Session::get('error')  }}');
    @endif

    @if(\Session::has('success'))
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('success')  }}');
    @endif
</script>
