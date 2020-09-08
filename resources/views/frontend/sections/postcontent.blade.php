<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    <h1>{{$post->title}}</h1>

                    <div style="padding-top: 10px;padding-bottom: 10px">
                        <a href="#" style="padding-right: 10px" ><i class="fa fa-user-o"></i> {{$post->authorId->name}}</a>
                        <a href="#" ><i class="fa fa-calendar"></i> {{date('d/m/Y', strtotime($post->created_at))}}</a>
                    </div>

                    <img class="popup-link" href="{{asset('storage/'.$post->image)}}" src="{{asset('storage/'.$post->image)}}" alt="">
                    {!! $post->body !!}
                </div>

                <!-- Comment Area Start -->

                <!-- Comment Area End -->
            </div>

            <!-- Sidebar Widget -->
            @include('frontend.sections.sidebar')
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->