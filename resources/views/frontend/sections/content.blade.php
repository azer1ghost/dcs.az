<!-- ##### Content Area Start ###### -->
<section class="about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-12">
                <div class="about-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>{{$page['excerpt']}}</p>
                        <h2>{{$page['title']}}</h2>
                    </div>
                    {!! $page['body'] !!}
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