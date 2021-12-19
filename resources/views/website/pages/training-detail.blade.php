@extends('website.layout')

@section('title', $training->name)
@section('description', $training->excerpt)

@section('content')

    <x-bread-crumb :title="statictext('homepage','services.title')">
        <x-bread-crumb-link :link="route('homepage')">
            Homepage
        </x-bread-crumb-link>
        <x-bread-crumb-link :link="route('trainings')">
            Trainings
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{$training->getTranslatedAttribute('name')}}
        </x-bread-crumb-link>
    </x-bread-crumb>

    <!-- ##### Content Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about-content mb-100">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ statictext('training', 'success.message') }}
                                        </div>
                                    @endif
                                    <div class="line"></div>
                                    <h2>{{$training->getTranslatedAttribute('name')}}</h2>
                                    {{-- $training->users[0]->name --}}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p>{{$training->date}}</p>
                                @auth
                                    @if(!auth()->user()->trainings->contains($training))
                                        <a href="{{route('trainingSubscribe', $training)}}">
                                            <button class="btn btn-outline-primary">{{statictext('global', 'join')}}</button>
                                        </a>
                                    @else
                                        <button disabled class="btn btn-primary">{{statictext('global', 'joined')}}</button>
                                    @endif
                                @endauth
                                @guest
                                    <a href="{{route('trainingSubscribe', $training)}}">
                                        <button class="btn btn-outline-primary">{{statictext('global', 'join')}}</button>
                                    </a>
                                @endguest
                            </div>

                            <div class="col-md-8">
                                {!! $training->getTranslatedAttribute('content') !!}
                            </div>
                            <div class="col-md-4">
                                <div class="about-thumbnail mb-100">
                                    <img style="width: 400px" href="{{asset('storage/'.$training->image)}}" src="{{asset('storage/'.$training->image)}}" alt="{{$training->name}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

