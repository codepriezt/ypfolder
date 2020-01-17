@extends('layout.base')

@section('page-content')

@include('components.page-loader')
@include('components.header')
@include('components.sticky-header')
@include('components.responsive-header')
@include('home.slider.top-slider')
@include('home.charity.charity')
@include('home.charity.charity-box')
@include('home.fundraisier.fund')
@include('home.fundraisier.fund-box')
@include('home.event.event')
@include('home.quote.quote')
@include('home.donate.donate')
@include('home.post.post')
@include('components.newsletter')
@include('components.footer')

@endsection