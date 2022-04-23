@extends('website.layout')

@section('title', $post->getTranslatedAttribute('seo_title'))
@section('description', $post->getTranslatedAttribute('meta_description'))
@section('keywords', $post->getTranslatedAttribute('meta_keywords'))

@section('style')
    <style>
        .single-news-area .news-content .news-metas a{
            position: relative;
            z-index: 1;
            font-size: 12px;
            color: #838383;
            font-weight: 600;
            margin-bottom: 0;
            line-height: 1.5;
        }
    </style>
@endsection

@section('content')
    <!-- ##### Post Details Area Start ##### -->
    <section class="news-area mt-md-5 mb-5">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <h1>{{$post->getTranslatedAttribute('title')}}</h1>
                        <div style="padding-top: 10px;padding-bottom: 10px">
                            <a href="#" style="padding-right: 10px" ><i class="fa fa-user-o"></i> {{$post->author->fullname}}</a>
                            <a href="#" ><i class="fa fa-calendar"></i> {{$post->created_at->format('d/m/Y')}}</a>
                        </div>
                        <img class="popup-link" src="{{image($post->image)}}" alt="{{$post->getTranslatedAttribute('title')}}">
                        {!! $post->getTranslatedAttribute('body') !!}
                    </div>
                </div>
                <!-- Sidebar Widget -->
                <x-article-sidebar/>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
