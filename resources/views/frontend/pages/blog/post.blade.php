@extends('layout')

@section('title', $post['seo_title'])
@section('description', $post['meta_description'])
@section('keywords', $post['meta_keywords'])

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
    @include('frontend.sections.postcontent')
    @include('frontend.sections.subscribe')
    @include('frontend.sections.footer')

@endsection

@section('scripts')
    <script src="{{asset('assets/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script>
        //Image opener
        $(document).ready(function() {
            $('.popup-link').magnificPopup({
                type: 'image',
                mainClass: 'mfp-fade'
                // other options
            });
        });

        //set mainpage link
        $('#mainpagelink').text($('.classynav ul li:first-child a span').html())

        //search form
        $( "#search" ).submit(function(e){
            window.location.href = "{{route('Search')}}" + "/" +$('#search_input').val();
            e.preventDefault();
        });

        //subscribe
        $( "#subscribeForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('Subscribe')}}",
                data: $(this).serialize(), // serializes the form's elements.

                success: function(data) {
                    if (data['status']){

                        $.message({
                            type: "success",
                            text: data['message'] + " {{statictext('subscribe','subscribed')}}",
                            positon: "bottom-center",
                            duration: 5000
                        });

                    } else {

                        $.message({
                            type: "error",
                            text: "{{statictext('subscribe','error')}}",
                            positon: "bottom-center",
                            duration: 5000
                        });

                    }

                },

            });
        });
    </script>
@endsection