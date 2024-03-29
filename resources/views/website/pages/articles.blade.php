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
    <section class="news-area my-md-5 my-1 mb-5">
        <div class="container">
            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8 mt-md-5 order-md-first order-last">
                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-12 col-lg-6">
                                <!-- Single Blog Area -->
                                <div class="single-blog-area mb-70">
                                    <div class="blog-thumbnail mb-1">
                                        <a href="{{route('article', $post->slug)}}"><img src="{{asset(Voyager::image($post->image))}}"></a>
                                    </div>
                                    <div class="blog-content">
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                        <a href="{{route('article', $post->slug)}}" class="post-title">{{$post->getTranslatedAttribute('title')}}</a>
                                        <div class="blog-meta mb-1">
                                            <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$post->author->getAttribute('fullname')}}</a>
                                            <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$post->created_at->format('d/m/Y')}}</a>
                                        </div>
                                        <p>{{Str::of($post->getTranslatedAttribute('excerpt'))->limit(150)}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            @if(request('search'))
                                <div class="col-12 alert alert-warning">
                                    <p class="text-muted text-center m-3">Axtarışa uyğun heç bir nəticə tapılmadı</p>
                                </div>
                            @else
                                <div class="col-12 alert alert-warning">
                                    <p class="text-muted text-center m-3">Hazırda heç bir məqalə paylaşılmayıb</p>
                                </div>
                            @endif
                        @endforelse
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

