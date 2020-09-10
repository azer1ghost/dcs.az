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
        //search
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