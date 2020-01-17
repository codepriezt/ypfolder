@extends('layout.base')
@section('page-content')


@include('components.page-loader')
@include('components.header')
@include('components.sticky-header')
@include('components.responsive-header')
@include('form.slider.slider')
@include('form.form')
@include('components.footer')

@endsection