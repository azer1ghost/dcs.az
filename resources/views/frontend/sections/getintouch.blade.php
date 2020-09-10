<!-- ##### Miscellaneous Area Start ###### -->
<section class="miscellaneous-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <!-- Add Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="add-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <a href="#"><img src="{{asset('assets/img/bg-img/add.png')}}" alt=""></a>
                </div>
            </div>



            <!-- News Area -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="news--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Section Heading -->
                    <div class="section-heading mb-50">
                        <h2>{{ statictext('blog','lastestnews') }}</h2>
                    </div>

                    @foreach(lastNews(3) as $l_post)
                    <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <a href="{{route('Post',$l_post->slug)}}"><img style="min-height: 106.22px" src="{{asset('storage/'.$l_post->image)}}"></a>
                            </div>
                            <div class="news-content">
                                <span>{{ \Carbon\Carbon::parse($l_post->created_at)->diffForHumans() }}</span>
                                <a href="{{route('Post',$l_post->slug)}}">{{$l_post->title}}</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><i class="fa fa-user-o"></i> {{$l_post->authorId['name']}}</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($l_post->created_at)->format('d/m/Y')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ###### -->