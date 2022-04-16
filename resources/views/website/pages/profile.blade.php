@extends('website.layout')

@section('title', "Profile")

@section('style')

@endsection

@section('content')

    <!-- ##### Content Area Start ###### -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">{{$user->getAttribute('fullname')}}</span>
                        <span class="text-black-50">{{$user->getAttribute('email')}}</span>
                    </div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form action="{{route('profile')}}" method="POST" class="form-row mt-2">
                            @csrf
                            <x-input::text name="email" :value="$user->getAttribute('email')" width="6"/>
                            <x-input::text name="name" :value="$user->getAttribute('name')" width="6"/>
                            <x-input::text name="surname" :value="$user->getAttribute('surname')" width="6"/>
                            <x-input::text name="father" :value="$user->getAttribute('father')" width="6"/>
                            <x-input::text name="phone" :value="$user->getAttribute('phone')" width="6"/>
                            <x-input::text name="profession" :value="$user->getAttribute('profession')" width="6"/>
                            <x-input::submit value="Save"/>
                        </form>
                    </div>
{{--                    <div class="my-4">--}}
{{--                        <h4 class="m-2 mb-4">My trainings</h4>--}}
{{--                        <div class="list-group">--}}
{{--                            @forelse($user->trainings as $training)--}}
{{--                            <div class="list-group-item list-group-item-action">--}}
{{--                                <div class="d-flex justify-content-between ">--}}
{{--                                    <a href="{{route('training', $training)}}" class="m-2 btn-link">--}}
{{--                                        {{$training->getTranslatedAttribute('name')}}--}}
{{--                                    </a>--}}
{{--                                    <a href="{{route('trainingUnsubscribe', $training)}}">--}}
{{--                                        <button class="btn btn-outline-warning">Unsubscribe</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @empty--}}
{{--                                <div class="list-group-item list-group-item-action">--}}
{{--                                    <div class="d-flex justify-content-between ">--}}
{{--                                        <p class="m-2">--}}
{{--                                            Your are not have any trainings--}}
{{--                                        </p>--}}
{{--                                        <a class="m-2" href="{{route('trainings')}}">--}}
{{--                                            <button class="btn btn-outline-info">Go to trainings</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforelse--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="my-4">
                        <h4 class="m-2 mb-4">My Certificates</h4>
                        <div class="list-group">
                            @forelse($user->certificates as $certificate)
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between ">
                                    <a href="{{route('certificate', $certificate)}}" class="m-2 btn-link">
                                        {{$certificate->training->getTranslatedAttribute('name')}}
                                    </a>
                                </div>
                            </div>
                            @empty
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex justify-content-between ">
                                        <p class="m-2">
                                            Your are not have any certificate
                                        </p>
                                        <a class="m-2" href="{{route('trainings')}}">
                                            <button class="btn btn-outline-info">Go to trainings</button>
                                        </a>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->


@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
    </script>
@endsection
