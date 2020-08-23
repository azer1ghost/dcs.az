@extends('layout')

@section('title', $page['title'])
@section('description', $page['meta_description'])
@section('keywords', $page['meta_keywords'])

@section('style')
    <link rel="stylesheet" href="{{asset('assets/magnific-popup/magnific-popup.css')}}">
    <style>
        /* overlay at start */
        .mfp-fade.mfp-bg {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }
        /* overlay animate in */
        .mfp-fade.mfp-bg.mfp-ready {
            opacity: 0.8;
        }
        /* overlay animate out */
        .mfp-fade.mfp-bg.mfp-removing {
            opacity: 0;
        }

        /* content at start */
        .mfp-fade.mfp-wrap .mfp-content {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }
        /* content animate it */
        .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
            opacity: 1;
        }
        /* content animate out */
        .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
            opacity: 0;
        }
    </style>
@endsection

@section('content')

    @include('frontend.sections.header')
    @include('frontend.sections.breadcrumb')
    @include('frontend.sections.content')
    @include('frontend.sections.footer')

@endsection

@section('scripts')
    <script src="{{asset('assets/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-link').magnificPopup({
                type: 'image',
                mainClass: 'mfp-fade'
                // other options
            });
        });

        $main = $('.classynav ul li:first-child a span').html()
        $('#mainpagelink').text($main)
    </script>
@endsection