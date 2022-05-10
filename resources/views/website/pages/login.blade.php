@extends('website.layout')

@section('title', "Login")

@section('content')
    <div class="container pt-5 pb-5">
        <div class="row d-flex justify-content-center pt-5 pb-5">
            <div class="col-md-6 col-12">
                @if(session('user'))
                    <div class="alert alert-success" role="alert">
                        {{statictext('login','verified')}}
                    </div>
                @endif
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item col-6" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#personal" role="tab"
                           aria-controls="personal" aria-selected="true">Personal</a>
                    </li>
                    <li class="nav-item col-6" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cooperative" role="tab"
                           aria-controls="cooperative" aria-selected="false">Cooperative</a>
                    </li>
                </ul>
                <div class="tab-content p-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{statictext('login', 'email')}}</label>
                                <input type="email" value="{{session('user') ?? null}}" name="email"
                                       placeholder="{{statictext('login','email')}}"
                                       class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{statictext('login','password')}}</label>
                                <input type="password" name="password" id="password"
                                       placeholder="{{statictext('login', 'password')}}" class="form-control">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="remember_me" class="form-check-input" id="remember">
                                <label class="form-check-label"
                                       for="remember">{{statictext('login', 'checkmeout')}}</label>
                            </div>
                            <button type="submit"
                                    class="btn credit-btn form-control">{{statictext('login', 'login.btn')}}</button>
                            <div class="align-content-center pt-3">
                                <p class="text-center">Don't have an account?
                                    <a style="color: #003679" href="{{route('register')}}">Sign Up</a>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="cooperative" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="alert alert-success" role="alert">
                            Tezliklə...
                        </div>
{{--                        <form action="{{route('login')}}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">{{statictext('login', 'email')}}</label>--}}
{{--                                <input type="email" value="{{session('user') ?? null}}" name="email"--}}
{{--                                       placeholder="{{statictext('login','email')}}"--}}
{{--                                       class="form-control @error('email') is-invalid @enderror">--}}
{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password">{{statictext('login','password')}}</label>--}}
{{--                                <input type="password" name="password" id="password"--}}
{{--                                       placeholder="{{statictext('login', 'password')}}" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group form-check">--}}
{{--                                <input type="checkbox" name="remember_me" class="form-check-input" id="remember">--}}
{{--                                <label class="form-check-label"--}}
{{--                                       for="remember">{{statictext('login', 'checkmeout')}}</label>--}}
{{--                            </div>--}}
{{--                            <button type="submit"--}}
{{--                                    class="btn credit-btn form-control">{{statictext('login', 'login.btn')}}</button>--}}
{{--                            <div class="align-content-center pt-3">--}}
{{--                                <p class="text-center">Don't have an account?--}}
{{--                                    <a style="color: #003679" href="{{route('register')}}">Sign Up</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
