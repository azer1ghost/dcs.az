@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

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
    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-12 col-lg-6">
                                <!-- Single Blog Area -->
                                <div class="single-blog-area mb-70">
                                    <div class="blog-thumbnail">
                                        <a href="{{route('article', $post->slug)}}"><img src="{{asset(Voyager::image($post->image))}}"></a>
                                    </div>
                                    <div class="blog-content">
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                        <a href="{{route('article', $post->slug)}}" class="post-title">{{$post->getTranslatedAttribute('title')}}</a>
                                        <div class="blog-meta">
                                            <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$post->author_id}}</a>
                                            <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$post->created_at->format('d/m/Y')}}</a>
                                        </div>
                                        <p>{{Str::of($post->getTranslatedAttribute('excerpt'))->limit(150)}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $posts->links() }}
                </div>
                <!-- Sidebar Area -->
                <x-article-sidebar/>
            </div>
        </div>
    </section>
    <!-- ##### News Area End ##### -->

@endsection

