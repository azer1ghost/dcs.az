@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('style')
    <style>
        .list-group-item.active{
            background-color: #003679 !important;
        }
    </style>
@endsection

@section('content')

    <x-bread-crumb :title="statictext('homepage','services.title')" :banner="$meta->get('banner')">
        <x-bread-crumb-link :link="route('homepage')">
            Homepage
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{statictext('homepage','services.title')}}
        </x-bread-crumb-link>
    </x-bread-crumb>

    <section class="about-area mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about-content mb-100">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-5">
                                <div class="list-group" id="list-tab" role="tablist">
                                    @foreach($services as $service)
                                        <a class="list-group-item list-group-item-action @if($loop->first) active @endif"
                                           id="list-open{{$service->getAttribute('id')}}"
                                           data-toggle="list"
                                           href="#list-list-open{{$service->getAttribute('id')}}"
                                           role="tab"
                                           aria-controls="listopen{{$service->getAttribute('id')}}">
                                            <i class="{{$service->getAttribute('icon')}} text-info mx-2"></i>
                                            {{$service->getTranslatedAttribute('title')}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach($services as $service)
                                        <div class="tab-pane fade  @if($loop->first) show active @endif"
                                             id="list-list-open{{$service->getAttribute('id')}}"
                                             role="tabpanel"
                                             aria-labelledby="list-open{{$service->getAttribute('id')}}">
                                            <h3>{{$service->getTranslatedAttribute('title')}}</h3>
                                            {!!$service->getTranslatedAttribute('text')!!}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

