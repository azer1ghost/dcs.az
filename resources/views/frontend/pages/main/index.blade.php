@extends('layout')

@section('description', trans('login.pageTitle'))

@section('style')

@endsection

@section('content')
    @include('frontend.sections.header')
    @include('frontend.sections.slider')
    @include('frontend.sections.features')
    @include('frontend.sections.counter')
    @include('frontend.sections.services')
    @include('frontend.sections.subscribe')
    @include('frontend.sections.getintouch')
    @include('frontend.sections.footer')
@endsection

@section('scripts')
    <script>
        // Slow scroll for subscribes
        $(document).on('click', 'a[href^="#"]', function(e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $id.offset().top-200;

            // animated top scrolling
            $('body, html').animate({scrollTop: pos}, 1000);
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