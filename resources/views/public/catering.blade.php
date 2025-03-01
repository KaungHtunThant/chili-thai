@extends('layouts.index')
@section('content')
    @include('components.catering')
@endsection
@section('custom_scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#date", {});
</script>
@endsection