<!-- ##### Miscellaneous Area Start ###### -->
<section class="miscellaneous-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <!-- Add Area -->
        {{--            <div class="col-12 col-md-6 col-lg-3">--}}
        {{--                <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">--}}
        {{--                    <a href="#"><img src="{{asset('assets/img/bg-img/add.png')}}" alt=""></a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <!-- News Area -->
            <div class="col-12 col-md-12 col-lg-12">
                <div class="news--area mb-100 wow fadeInUp row" data-wow-delay="500ms">
                    <!-- Section Heading -->
                    <div class="col-12 section-heading mb-50">
                        <h2>{{ statictext('blog', 'lastestnews') }}</h2>
                    </div>
                    @forelse($articles as $article)
                    <!-- Single News Area -->
                        <div class="col-12 col-md-6 col-lg-6 single-news-area d-flex align-items-center mb-5">
                            <div class="news-thumbnail">
                                <a href="{{route('article', $article->getAttribute('slug'))}}">
                                    <img style="min-height: 150px" src="{{asset('storage/'.$article->getAttribute('image'))}}">
                                </a>
                            </div>
                            <div class="news-content">
                                <span>{{ $article->getAttribute('created_at')->diffForHumans() }}</span>
                                <a href="{{route('article', $article->getAttribute('slug'))}}">{{$article->getTranslatedAttribute('title')}}</a>
                                <p>{!! Str::limit(strip_tags($article->getTranslatedAttribute('body')), 80 ) !!}</p>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$article->author->fullname}}</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$article->getAttribute('created_at')->format('d/m/Y')}}</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 single-news-area d-flex align-items-center">
                            <h4>No post available</h4>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ###### -->
