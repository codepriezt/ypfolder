@extends('layout.base')
@section('page-content')

@section('style-section')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
@include('components.page-loader')
@include('components.header')
@include('components.sticky-header')
@include('components.responsive-header')
@include('form.slider.slider')
@include('form.form')
@include('components.footer')

@endsection