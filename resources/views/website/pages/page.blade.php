@extends('website.layouts.main')

@section('title', $page->getTranslatedAttribute('title'))
@section('description', $page->getTranslatedAttribute('meta_description'))
@section('keywords', $page->getTranslatedAttribute('meta_keywords'))

@section('style')
    <link rel="stylesheet" href="{{asset('assets/magnific-popup/magnific-popup.css')}}">
    <style>
        /* overlay at start */
        .mfp-fade.mfp-bg {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }
        /* overlay animate in */
        .mfp-fade.mfp-bg.mfp-ready {
            opacity: 0.8;
        }
        /* overlay animate out */
        .mfp-fade.mfp-bg.mfp-removing {
            opacity: 0;
        }

        /* content at start */
        .mfp-fade.mfp-wrap .mfp-content {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }
        /* content animate it */
        .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
            opacity: 1;
        }
        /* content animate out */
        .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
            opacity: 0;
        }
    </style>
@endsection

@section('content')

    <x-bread-crumb :title="$page->getTranslatedAttribute('title')">
        <x-bread-crumb-link :link="route('homepage')">
            Homepage
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
                        <img style="max-width: 400px" class="popup-link" href="{{asset('storage/'.$page['image'])}}" src="{{asset('storage/'.$page['image'])}}" alt="{{$page['title']}}" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->
@endsection
