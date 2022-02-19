@extends('layout')

@section('title', "Reset Password")

@section('style')

@endsection

@section('content')

    @include('frontend.sections.header')

    <div class="container pt-5 pb-5">
        <div class="row d-flex justify-content-center pt-5 pb-5">
            <div class="col-md-4">
                <form id="resetpass" >
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="form-group">
                        <label for="Password1">{{statictext('login','password')}}</label>
                        <input type="password" name="password" class="form-control" placeholder="{{statictext('register', 'password1.placeholder')}}" id="Password1">
                    </div>
                    <div class="form-group">
                        <label for="Password2">{{statictext('login','re.password')}}</label>
                        <input type="password" name="password" class="form-control" placeholder="{{statictext('register', 'password2.placeholder')}}"  id="Password2">
                    </div>
                    <br>
                    <button type="submit" class="btn credit-btn form-control">Change</button>
                </form>
            </div>
        </div>
    </div>

    @include('frontend.sections.footer')

@endsection

@section('scripts')
    <script>

        //register
        $( "#resetpass" ).submit(function( event ) {
            event.preventDefault();

            let password = $("#Password1").val();
            let confirmPassword = $("#Password2").val();
            if (password !== confirmPassword) {
                $.message({
                    type: "error",
                    text: "{{statictext('register','pass.dont.much')}}",
                    positon: "bottom-center",
                    duration: 5000
                });
                return false;
            }

            $.ajax({
                type: "POST",
                url: "{{route('Change')}}",
                data: $(this).serialize(), // serializes the form's elements.

                success: function(data) {

                    if (data['status']){
                        $.message({
                            type: "success",
                            text: data['message'],
                            positon: "bottom-center",
                            duration: 5000
                        });
                    }
                    else{
                        $.message({
                            type: "error",
                            text: data['message'],
                            positon: "bottom-center",
                            duration: 5000
                        });
                    }

                },

                error: function (jqXHR, textStatus, errorThrown) {
                    $.message({
                        type: "error",
                        text: "{{statictext('login','many.request')}}",
                        positon: "bottom-center",
                        duration: 5000
                    });
                }

            });
        });
    </script>
@endsection
