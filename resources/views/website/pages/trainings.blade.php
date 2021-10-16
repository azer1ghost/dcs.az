@extends('website.layouts.main')

@section('content')

    <x-bread-crumb :title="statictext('trainings', 'header')">
        <x-bread-crumb-link :link="route('homepage')">
            Homepage
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{statictext('trainings', 'header')}}
        </x-bread-crumb-link>
    </x-bread-crumb>

    <!-- ##### Content Area Start ###### -->
    <section class="about-area m-5">
        <div class="container">
            <div class="align-items-center">
                <div class="row">
                    @foreach($trainings as $training)
                        <div class="col-12 col-lg-4">
                            <!-- Single Blog Area -->
                            <div class="single-blog-area">
                                <div class="blog-thumbnail">
                                    <a href="{{route('training', $training->slug)}}">
                                        <img style="width: 100%" src="{{asset('storage/'.$training->image)}}">
                                    </a>
                                </div>
                                <div class="blog-content mt-0">
                                    <span>{{ $training->created_at->diffForHumans() }}</span>
                                    <a href="{{route('training',$training->slug)}}" class="post-title">{{$training->getTranslatedAttribute('name', 'locale', App::getLocale())}}</a>
                                    <div class="blog-meta mb-1">
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{$training->created_at->format('d/m/Y')}}</a>
                                    </div>
                                    <p class="mb-2">{{Str::of($training->getTranslatedAttribute('excerpt', 'locale', App::getLocale()))->limit(150)}}</p>
                                    <a href="{{route('training', $training->slug)}}">
                                        <button class="btn btn-outline-info">
                                            {{statictext('global', 'more')}}
                                        </button>
                                    </a>

{{--                                        @auth--}}
{{--                                            @if(!checkTrainingUser($training->id))--}}
{{--                                                <a href="{{route('Join', $training->id)}}">--}}
{{--                                                    <button class="btn btn-primary">{{statictext('global','join')}}</button>--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <button disabled class="btn btn-primary">{{statictext('global','joined')}}</button>--}}
{{--                                            @endif--}}
{{--                                        @else--}}
{{--                                            <a href="{{route('Join', $training->id)}}">--}}
{{--                                                <button class="btn btn-primary">{{statictext('global','join')}}</button>--}}
{{--                                            </a>--}}
{{--                                        @endauth--}}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    {{ $trainings->links() }}
                </nav>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->

@endsection
