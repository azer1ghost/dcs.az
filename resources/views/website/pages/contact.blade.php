@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')

    <x-bread-crumb :title="$meta->get('title')" :banner="$meta->get('image')">
        <x-bread-crumb-link :link="route('homepage')">
            {{statictext('breadcrumb', 'homepage')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{$meta->get('title')}}
        </x-bread-crumb-link>
    </x-bread-crumb>


    <!-- ##### Content Area Start ###### -->
    <section class="about-area ">

        <div class="container py-5">
            <div class="row ">
                <div class="col-12 col-md-4">
                    <div class="card" style="overflow: hidden;background: none !important;height: 200px;width: 100%;" >
                        <iframe width="100%"
                                height="200"
                                src="https://maps.google.com/maps?q={{setting('site.adress')}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                        ></iframe>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fa fa-home mr-3" aria-hidden="true"></i>
                            {{setting('site.adress')}}
                        </a>
                        <a href="mailto:{{setting('site.email')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-envelope mr-3" aria-hidden="true"></i>
                            {{setting('site.email')}}
                        </a>
                        <a href="call:{{setting('site.number')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                            {{setting('site.number')}}
                        </a>
                        <a href="call:{{setting('site.phone')}}" class="list-group-item list-group-item-action">
                            <i class="fa fa-phone-square mr-3" aria-hidden="true"></i>
                            {{setting('site.phone')}}
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <form action="{{route('send')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp"
                                   placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" required class="form-control" id="subject" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- ##### About Area End ###### -->

@endsection
