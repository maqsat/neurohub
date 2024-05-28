@extends('layouts.app')

@section('content')

    <section class="methods" id="methods">
        <div class="container">
            <h1 class="title text-4xl">{{ $method->title }}</h1>
            <div class="cards accordion" id="methods-accordion">
                <div class="accordion-body">
                    <img src="/{{ $method->photo }}" title="{{ $method->title }}"  alt="{{ $method->meta_keywords }}">
                    <p class="text text-sm">
                        {{ $method->text }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('seo_side')
    <title>{{ $method->title }}</title>
    <meta name="description" content="{{ $method->meta_description }}">
    <meta name="keywords" content="{{ $method->meta_keywords }}">
    <meta property="og:title" content="{{ $method->title }}">
    <meta property="og:description" content="{{ $method->meta_description }}">
    <meta property="og:image" content="/{{ $method->photo }}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="300">
@endsection
