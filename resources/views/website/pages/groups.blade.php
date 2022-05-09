@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('style')
    <style>
        .card{
            box-shadow: 0 1px 2px rgba(0,0,0,0.15);
            transition: box-shadow 0.3s ease-in-out;
        }
        .card:hover{
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    </style>
@endsection

@section('content')

    <x-bread-crumb :title="statictext('groups', 'header')" :banner="$meta->get('banner')">
        <x-bread-crumb-link :link="route('homepage')">
            {{statictext('breadcrumb', 'homepage')}}
        </x-bread-crumb-link>
        <x-bread-crumb-link is-current="1">
            {{statictext('groups', 'header')}}
        </x-bread-crumb-link>
    </x-bread-crumb>

    <!-- ##### Content Area Start ###### -->
    <section class="about-area m-5">
        <div class="container">
            <div class="align-items-center">
                <div class="row">
                    @foreach($groups as $group)
                        <div class="col-12 col-lg-4">
                            <!-- Single Blog Area -->
                            <div class="single-blog-area card mb-4">
                                <div class="blog-thumbnail mb-0">
                                    <a href="{{route('training', $group->slug)}}">
                                        <img style="width: 100%; height: 220px" src="{{image($group->image)}}">
                                    </a>
                                </div>
                                    <div class="blog-content mt-0 px-2 py-2">
                                    <a href="{{route('training', $group->slug)}}" class="post-title" style="font-size: 16px">{{$group->getTranslatedAttribute('title')}}</a>
                                    <p class="mb-2">{{Str::of($group->getTranslatedAttribute('meta_description'))->limit(150)}}</p>
                                    <a href="{{route('training', $group->slug)}}">
                                        <button class="btn btn-outline-info">
                                            {{statictext('global', 'more')}}
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    {{ $groups->links() }}
                </nav>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->

@endsection
