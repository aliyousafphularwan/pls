@if (empty(Session::get('sid')))
<script>
    window.location = "/login";
</script>
@else
    @extends('partials.master')
    @section('title', 'Dashboard')
        
    @section('content')
        {{ Session::get('sid') }}
    @endsection
@endif
