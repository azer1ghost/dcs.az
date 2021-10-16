@extends('layout')

@section('title', "Profile")

@section('style')
    <style>
        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 70%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
        .pointer{
            cursor: pointer;
        }
        .pointer:hover{
            background-color: darkblue;
        }
        .editableArea{
            float: left;
        }
        .editor-icon{
            display: none;
        }
    </style>
@endsection

@section('content')

    @include('frontend.sections.header')
    <!-- ##### Content Area Start ###### -->
    <section class="about-area section-padding-100-0">

        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <form enctype="multipart/form-data" id="upload_image_form" >
                            <div class="profile-img">
                                <img id="image_preview_container" src="{{ asset("storage/".Auth::user()->avatar) }}" alt="profile"/>
                                <div class="pointer file btn btn-lg btn-primary">
                                    {{statictext('profile','photo.change')}}
                                    <input class="pointer" id="profile_image" name="profile_image" type="file"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5 id="Head_User_name">
                                {{ Auth::user()->name }}
                            </h5>
                            <h6 id="Head_User_profession">
                                {{Auth::user()->profession}}
                            </h6>
                            <p class="proile-rating">RANKINGS : <span style="text-transform: capitalize">{{Auth::user()->role_name}}</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{statictext('global','about')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{statictext('training','trainings')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="subscribe-tab" data-toggle="tab" href="#subscribe" role="tab" aria-controls="subscribe" aria-selected="false">{{statictext('subscribe','title')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn" id="editProfile" >{{statictext('profile','edit')}}</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
{{--                        <div class="profile-work">--}}
{{--                            <p>WORK LINK</p>--}}
{{--                            <a href="">Website Link</a><br/>--}}
{{--                            <a href="">Bootsnipp Profile</a><br/>--}}
{{--                            <a href="">Bootply Profile</a>--}}
{{--                            <p>SKILLS</p>--}}
{{--                            <a href="">Web Designer</a><br/>--}}
{{--                            <a href="">Web Developer</a><br/>--}}
{{--                            <a href="">WordPress</a><br/>--}}
{{--                            <a href="">WooCommerce</a><br/>--}}
{{--                            <a href="">PHP, .Net</a><br/>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label>User Id</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <p>Kshiti123</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{statictext('register','name')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="user_name" class="editableArea">{{Auth::user()->name}}</p>
                                        <i style="padding: 7px" class="fa fa-pencil editor-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{statictext('login','email')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{statictext('global','phone')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="user_number" class="editableArea">{{Auth::user()->number}}</p>
                                        <i style="padding: 7px" class="fa fa-pencil editor-icon"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{statictext('global','profession')}}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p id="user_profession" class="editableArea">{{Auth::user()->profession}}</p>
                                        <i style="padding: 7px" class="fa fa-pencil editor-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">{{statictext('training','name')}}</th>
                                                <th scope="col">{{statictext('global','date')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach(auth()->user()->trainings as $training)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$training->name}}</td>
                                                        <td>{{$training->date}}</td>
                                                        <td>
                                                            <a href="{{route('Training',$training->slug)}}">
                                                                <button  class="btn btn-sm btn-primary">{{statictext('global', 'more')}}</button>
                                                            </a>
                                                            <a href="{{route('Remove', $training->id)}}">
                                                                <button class="btn btn-sm btn-danger">{{statictext('global','remove')}}</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="subscribe" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="subscriberForm">
                                            @csrf
                                            <input type="hidden" name="user_token" value="{{Auth::user()->subscriber->token}}">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="form-group pt-2">
                                                        <input type="checkbox" class="subs" name="weekly" id="weekly"  @if (strstr( Auth::user()->subscriber->subscribe, 'news' )) checked @endif >
                                                        <label for="weekly"> {{statictext('subscribe','weekly')}}</label>
                                                        <p style="color: #9b9b9b" class="pl-4">{{statictext('subscribe','weekly.sub')}}</p>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="form-group pt-2">
                                                        <input type="checkbox" class="subs" name="trainings" @if (strstr( Auth::user()->subscriber->subscribe, 'trainings' )) checked @endif id="trainings" >
                                                        <label for="trainings"> {{statictext('subscribe','training')}}</label>
                                                        <p style="color: #9b9b9b" class="pl-4">{{statictext('subscribe','training.sub')}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### About Area End ###### -->
    @include('frontend.sections.footer')

@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {

            var toggle = false

            $('#editProfile').on("click", function (event) {

                    event.preventDefault()

                    $(this).toggleClass("btn-primary")

                    $('.editableArea').toggleClass("border")
                    $('.editor-icon').toggle()

                    if (!toggle){

                        toggle = true

                        $('.editableArea').attr('contenteditable', 'true')

                        $(this).text("{{statictext('global','save')}}")

                    }else{

                        toggle = false

                        $('.editableArea').attr('contenteditable', 'false')

                        $(this).text("{{statictext('profile','edit')}}")

                        let userData = {
                                    user_name:  $('#user_name').text(),
                                    user_number: $('#user_number').text(),
                                    user_profession: $('#user_profession').text()
                                }

                        $.ajax({
                            url: '{{ route('Save') }}',
                            data: { userData: userData },
                            type: 'POST',
                            beforeSend: function(){

                            },
                            success: function(e) {
                                $('#Head_User_name').text($('#user_name').text())
                                $('#Head_User_profession').text($('#user_profession').text())
                                $.message({
                                    type: "success",
                                    text: "{{statictext('global','saved')}}",
                                    positon: "bottom-center",
                                    duration: 5000
                                });
                            }
                        })
                    }
                });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#profile_image').change(function(){

                // let reader = new FileReader();
                // reader.onload = (e) => {
                //     $('#image_preview_container').attr('src', e.target.result);
                // }
                // reader.readAsDataURL(this.files[0]);

                let fd = new FormData();
                fd.append( 'profile_image', this.files[0] );

                $.ajax({
                    url: '{{ route('Upload') }}',
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    beforeSend: function(){
                        $('#image_preview_container').attr("src", '{{asset('assets/img/loading.gif')}}');
                    },
                    success: function(data) {
                        $('#image_preview_container').attr("src", data['img']);
                        $.message({
                            type: "success",
                            text: "{{statictext('global','saved')}}",
                            positon: "bottom-center",
                            duration: 5000
                        });
                    }
                })

            });


            $( ".subs" ).change(function( event ) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{route('Subscriber')}}",
                    data: $('#subscriberForm').serialize(), // serializes the form's elements.

                    success: function(data) {
                        if (data['status']){

                            $.message({
                                type: "success",
                                text: "{{statictext('global','saved')}}",
                                positon: "bottom-center",
                                duration: 5000
                            });

                        } else {

                            $.message({
                                type: "error",
                                text: "Saving error",
                                positon: "bottom-center",
                                duration: 5000
                            });

                        }

                    },

                    error: function (jqXHR, textStatus, errorThrown) {

                        let message = "{{statictext('global','reload')}}"

                        if(jqXHR['status'] === 429){
                            message = "Too Many Requests. Wait about 1 min"
                        }

                        $.message({
                            type: "error",
                            text: message,
                            positon: "bottom-center",
                            duration: 5000
                        });

                    }

                });
            });
        });
    </script>
@endsection