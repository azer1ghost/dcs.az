<div class="col-12 col-sm-9 col-md-6 col-lg-4">
    <div class="sidebar-area mb-100">

        <!-- Single Sidebar Widget -->
        <div class="single-widget-area search-widget">
            <form id="search" action="{{route('articles')}}">
                <input type="search" name="search" id="search_input" value="{{request('search')}}" placeholder="{{ statictext('blog', 'search') }}">
                <button type="submit">{{ statictext('blog', 'search') }}</button>
            </form>
        </div>

        <!-- Single Sidebar Widget -->
        <div class="single-widget-area cata-widget">
            <div class="widget-heading">
                <div class="line"></div>
                <h4>{{ statictext('blog', 'categories') }}</h4>
            </div>

            <ul>
                @foreach($categories as $category)
                    <li><a href="{{route('articles', ['category' => $category->getAttribute('id')])}}">{{$category->getTranslatedAttribute('name')}}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- Single Sidebar Widget -->
        <div class="single-widget-area tabs-widget">
            <div class="widget-heading">
                <div class="line"></div>
                <h4>{{ statictext('blog','lastestnews') }}</h4>
            </div>
            <div class="credit-tabs-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fadeshow active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                        <div class="credit-tab-content">
                            @foreach($latestArticles as $article)
                                <!-- Single News Area -->
                                <div class="single-news-area d-flex align-items-center">
                                    <div class="news-thumbnail">
                                        <a href="{{route('article', $article)}}"><img src="{{asset('storage/'.$article->getAttribute('image'))}}"></a>
                                    </div>
                                    <div class="news-content">
                                        <span> {{ $article->getAttribute('created_at')->diffForHumans() }}</span>
                                        <a href="{{route('article', $article)}}">{{$article->getTranslatedAttribute('title')}}</a>
                                        <div class="news-metas">
                                            <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$article->author_id}}</a>
                                            <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$article->getAttribute('created_at')->format('d/m/Y')}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
