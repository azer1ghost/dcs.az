@extends('layout')

@section('description', trans('login.pageTitle'))

@section('style')
    <style>
        .single-news-area .news-content .news-metas a{
            position: relative;
            z-index: 1;
            font-size: 12px;
            color: #838383;
            font-weight: 600;
            margin-bottom: 0;
            line-height: 1.5;
        }
    </style>
@endsection

@section('content')

    @include('frontend.sections.header')
    @include('frontend.sections.news')
    @include('frontend.sections.subscribe')
    @include('frontend.sections.footer')

@endsection

@section('scripts')
    <script>
        $( "#search" ).submit(function(e){
            window.location.href = "{{route('Search')}}" + "/" +$('#search_input').val();
            e.preventDefault();
        });
    </script>
@endsection