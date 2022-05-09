@extends('website.layout')

@section('title', $group->getTranslatedAttribute('title'))
@section('description', $group->getTranslatedAttribute('meta_description'))

@section('content')

    <x-bread-crumb :title="statictext('homepage','services.title')" :banner="$meta->get('banner')">
        <x-bread-crumb-link :link="route('homepage')">
            {{statictext('breadcrumb', 'homepage')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link :link="route('trainings')">
            {{statictext('trainings', 'header')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{$group->getTranslatedAttribute('title')}}
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
                                    <h2>{{$group->getTranslatedAttribute('title')}}</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-thumbnail mb-100">
                                    <img style="width: 400px" src="{{image($group->image)}}" alt="{{$group->getTranslatedAttribute('name')}}" >
                                </div>
                            </div>
                            <div class="col-md-8">
                                {!! $group->getTranslatedAttribute('detail') !!}
                            </div>
                            <div class="col-12 table-responsive shadow shadow-sm p-4">
                                <form class="p-1">
                                    <div class="input-group mb-3 col-12 col-md-6 float-right">
                                        <input type="text" name="search" class="form-control" value="{{request('search')}}" placeholder="Axtar" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                                <i class="fal fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Təlim proqramı</th>
                                            <th class="text-center" scope="col">İştirakçı sayı</th>
                                            <th scope="col">Müddəti</th>
                                            <th scope="col">Qeydiyyat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trainings as $training)
                                        <tr>
                                            <td>{!! $training->highlighted( 'name', request('search')) !!}</td>
                                            <td class="text-center">
                                                @if($training->getAttribute('persons_count') <= 4)
                                                    Max {{$training->getAttribute('persons_count')}}
                                                @else
                                                    Min 4 - Max {{$training->getAttribute('persons_count')}}
                                                @endif
                                            </td>
                                            <td>{{ $training->duration }} gün</td>
                                            <td>
{{--                                            @auth('student')--}}
{{--                                                @unless(auth('student')->user()->getRelationValue('sessions')->contains($session))--}}
{{--                                                    <a href="{{route('trainingSubscribe', [ 'training' => $training, 'session' => $session])}}">--}}
{{--                                                        <button class="btn btn-outline-primary">{{statictext('global', 'join')}}</button>--}}
{{--                                                    </a>--}}
{{--                                                @else--}}
{{--                                                    <button disabled class="btn btn-primary">{{statictext('global', 'joined')}}</button>--}}
{{--                                                @endunless--}}
{{--                                            @endauth--}}
                                            @guest('student')
                                                <a href="{{route('register')}}">
                                                    <button class="btn btn-sm btn-outline-primary">{{statictext('global', 'register')}}</button>
                                                </a>
                                            @endguest
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="col-12">
                                    <div class="float-right">
                                        {!! $trainings->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

