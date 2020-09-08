<!-- ##### News Area Start ##### -->
<section class="news-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single News Area -->
            <div class="col-12 col-lg-8">
                <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-12 col-lg-6">
                        <!-- Single Blog Area -->
                        <div class="single-blog-area mb-70">
                            <div class="blog-thumbnail">
                                <a href="{{route('Post',$blog->slug)}}"><img src="{{asset('storage/'.$blog->image)}}"></a>
                            </div>
                            <div class="blog-content">
                                <span>{{ $blog->created_at->diffForHumans() }}</span>
                                <a href="{{route('Post',$blog->slug)}}" class="post-title">{{$blog->getTranslatedAttribute('title', 'locale', App::getLocale())}}</a>
                                <div class="blog-meta">
                                    <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$blog->authorId['name']}}</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$blog->created_at->format('d/m/Y')}}</a>
                                </div>
                                <p>{{Str::of($blog->getTranslatedAttribute('excerpt', 'locale', App::getLocale()))->limit(150)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    {{ $blogs->links() }}
                </nav>
            </div>

            <!-- Sidebar Area -->
            @include('frontend.sections.sidebar')
        </div>
    </div>
</section>
<!-- ##### News Area End ##### -->
