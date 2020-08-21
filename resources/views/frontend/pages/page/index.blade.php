@extends('layout')

@section('title', $page['title'])
@section('description', $page['meta_description'])
@section('keywords', $page['meta_keywords'])

@section('style')

@endsection

@section('content')

    @include('frontend.sections.header')
    @include('frontend.sections.breadcrumb')
    @include('frontend.sections.content')

@endsection

@section('scripts')
    <script>
        $main = $('.classynav ul li:first-child a span').html()
        $('#mainpagelink').text($main)
    </script>
@endsection