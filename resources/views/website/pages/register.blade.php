@extends('website.layout')

@section('title', "Login")

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px">
        <form action="{{route('register')}}" method="POST" class="form-row justify-content-between">
            @csrf
            <input type="hidden" name="locale" value="{{App::getLocale()}}">
            <div class="form-group col-12 col-md-12 mb-5">
                <h2 class="text-muted">Register</h2>
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="name">{{statictext('register', 'name')}}</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="{{statictext('register','name.placeholder')}}" id="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="name">{{statictext('register', 'surname')}}</label>
                <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{old('surname')}}"  placeholder="{{statictext('register','surname.placeholder')}}" id="surname">
                @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="email">{{statictext('login','email')}}</label>
                <input type="email" placeholder="{{statictext('login','email')}}" name="email" value="{{old('email')}}"  class="form-control @error('email') is-invalid @enderror" id="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="phone">{{statictext('login', 'phone')}}</label>
                <input type="phone" placeholder="{{statictext('login', 'phone')}}" name="phone" value="{{old('phone')}}"  class="form-control @error('phone') is-invalid @enderror" id="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="Password1">{{statictext('login', 'password')}}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{statictext('register', 'password1.placeholder')}}" id="Password1">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="Password2">{{statictext('login','re.password')}}</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{statictext('register', 'password2.placeholder')}}"  id="Password2">
            </div>

            <div class="col-12 col-md-3">
                <p>Do you have an account?
                    <a style="color: #003679" href="{{route('login')}}">Sign In</a>
                </p>
            </div>

            <div class="col-12 col-md-3 ">
                <button type="submit" class="btn btn-outline-info form-control">{{statictext('register', 'reg.btn')}}</button>
            </div>
        </form>
    </div>
@endsection
