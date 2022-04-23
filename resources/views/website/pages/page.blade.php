@extends('website.layout')

@section('title', $page->getTranslatedAttribute('title'))
@section('description', $page->getTranslatedAttribute('meta_description'))
@section('keywords', $page->getTranslatedAttribute('meta_keywords'))

@section('content')

    <x-bread-crumb :title="$page->getTranslatedAttribute('title')" :banner="$page->getAttribute('banner')">
        <x-bread-crumb-link :link="route('homepage')">
            {{statictext('breadcrumb', 'homepage')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{$page->getTranslatedAttribute('title')}}
        </x-bread-crumb-link>
    </x-bread-crumb>

    <!-- ##### Content Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>{{$page->getTranslatedAttribute('excerpt')}}</p>
                            <h2>{{$page->getTranslatedAttribute('title')}}</h2>
                        </div>
                        {!! $page->getTranslatedAttribute('body') !!}
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="about-thumbnail mb-100">
                        <img style="max-width: 400px; width: 100%" class="popup-link" src="{{image($page['image'])}}" alt="{{$page->getTranslatedAttribute('title')}}" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->
@endsection
