@extends('layout.master')
@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <a href="{{ url('/home') }}" class="text-decoration-none link-dark" type="button">
        <img src={{ asset('/image/nga-antri-logo.jpg') }} alt="...">
    </a>
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
{{-- @include('layout.footer') --}}
@endsection
