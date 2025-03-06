@extends('layouts.index')
@section('custom_css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
    @include('components.reservation')
@endsection
@section('custom_scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection
