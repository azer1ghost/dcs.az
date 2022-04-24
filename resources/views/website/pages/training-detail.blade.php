@extends('website.layout')

@section('title', $training->getTranslatedAttribute('name'))
@section('description', $training->getTranslatedAttribute('excerpt'))

@section('content')

    <x-bread-crumb :title="statictext('homepage','services.title')" :banner="$meta->get('banner')">
        <x-bread-crumb-link :link="route('homepage')">
            {{statictext('breadcrumb', 'homepage')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link :link="route('trainings')">
            {{statictext('trainings', 'header')}}
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
                                </div>
                            </div>
                            <div class="col-md-8">
                                {!! $training->getTranslatedAttribute('content') !!}
                            </div>
                            <div class="col-md-4">
                                <div class="about-thumbnail mb-100">
                                    <img style="width: 400px" src="{{image($training->image)}}" alt="{{$training->getTranslatedAttribute('name')}}" >
                                </div>
                            </div>
                            <div class="col-12 table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Təlim proqramı</th>
                                            <th scope="col">İştirakçı sayı</th>
                                            <th scope="col">Tarix</th>
                                            <th scope="col">Müddəti</th>
                                            <th scope="col">Qeydiyyat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($training->getRelation('sessions') as $session)
                                        <tr>
                                            <th>{{$session->getTranslatedAttribute('title')}}</th>
                                            <td>{{$session->getAttribute('persons_count')}}</td>
                                            <td>{{$session->getAttribute('started_at')->format('Y/m/d H:i')}}</td>
                                            <td>{{ trans_choice('auth.days', $session->duration, ['days' => $session->duration]) }}</td>
                                            <td>
                                            @auth('student')
                                                @unless(auth('student')->user()->getRelationValue('sessions')->contains($session))
                                                    <a href="{{route('trainingSubscribe', [ 'training' => $training, 'session' => $session])}}">
                                                        <button class="btn btn-outline-primary">{{statictext('global', 'join')}}</button>
                                                    </a>
                                                @else
                                                    <button disabled class="btn btn-primary">{{statictext('global', 'joined')}}</button>
                                                @endunless
                                            @endauth
                                            @guest('student')
                                                <a href="{{route('register')}}">
                                                    <button class="btn btn-outline-primary">{{statictext('global', 'register')}}</button>
                                                </a>
                                            @endguest
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

