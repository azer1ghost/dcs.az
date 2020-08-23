@extends('layout')

@section('description', trans('login.pageTitle'))

@section('style')

@endsection

@section('content')

    @include('frontend.sections.header')
    @include('frontend.sections.slider')
    @include('frontend.sections.features')
    @include('frontend.sections.services')
    @include('frontend.sections.footer')

@endsection

@section('scripts')

@endsection