@extends('website.layouts.main')

@section('title', "Login")

@section('content')
    <div class="container mt-5">
        <form action="{{route('register')}}" method="POST" class="form-row">
            @csrf
            <input type="hidden" name="locale" value="{{App::getLocale()}}">
            <div class="form-group col-12 col-md-6">
                <label for="name">{{statictext('register','name')}}</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{statictext('register','name.placeholder')}}" id="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="email">{{statictext('login','email')}}</label>
                <input type="email" placeholder="{{statictext('login','email')}}" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="phone">{{statictext('login', 'phone')}}</label>
                <input type="phone" placeholder="{{statictext('login', 'phone')}}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="Password1">{{statictext('login','password')}}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{statictext('register', 'password1.placeholder')}}" id="Password1">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="Password2">{{statictext('login','re.password')}}</label>
                <input type="password" name="password" class="form-control" placeholder="{{statictext('register', 'password2.placeholder')}}"  id="Password2">
            </div>
            <div class="col-12 col-md-12">
                <button type="submit" class="btn credit-btn">{{statictext('register','reg.btn')}}</button>
            </div>

            <div class="align-content-center pt-3">
                <p class="text-center">Do you have an account?
                    <a style="color: #003679" href="{{route('login')}}">Sign In</a>
                </p>
            </div>
        </form>
    </div>
@endsection
