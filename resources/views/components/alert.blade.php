<script>
    @if(\Session::has('error'))
        toastr.error('{{ \Illuminate\Support\Facades\Session::get('error')  }}');
    @endif


    @if(\Session::has('message'))
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('message')  }}');
    @endif
</script>
