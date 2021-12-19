@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')

    <x-slider/>

    <x-training/>

    <x-counters/>

    <x-services/>

    <x-subscribe-form/>

    <x-articles/>

@endsection
