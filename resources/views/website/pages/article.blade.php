@extends('website.layouts.main')

@section('title', $post->getTranslatedAttribute('seo_title'))
@section('description', $post->getTranslatedAttribute('meta_description'))
@section('keywords', $post->getTranslatedAttribute('meta_keywords'))

@section('content')

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
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

                        <img class="popup-link" href="{{asset('storage/'.$post->image)}}" src="{{asset('storage/'.$post->image)}}" alt="">
                        {!! $post->getTranslatedAttribute('body') !!}
                    </div>

                    <!-- Comment Area Start -->

                    <!-- Comment Area End -->
                </div>

                <!-- Sidebar Widget -->
                <x-article-sidebar/>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
