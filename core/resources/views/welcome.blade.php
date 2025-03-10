@extends('layouts.master')


@section('pageTitle')
    Home
@endsection


@section('content')
    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- advertisement -->
        <div class="bg-gray-50 py-4 hidden">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="mx-auto table text-center text-sm">
                    <a class="uppercase" href="#">Advertisement</a>
                    <a href="#">
                        <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
                    </a>
                </div>
            </div>
        </div>

        <!-- block news -->
        <div class="bg-white">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Europe
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            @foreach ($blogs as $blog)
                                <div
                                    class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                    <div class="flex flex-row sm:block hover-img">
                                        <a href="{{ route('single.blog', $blog->id) }}">
                                            <img class="max-w-full w-full mx-auto"
                                                src="{{ asset('admin-assets/images/' . $blog->image) }}" alt="alt title">
                                        </a>
                                        <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                            <h3 class="text-lg font-bold leading-tight mb-2">
                                                <a href="{{ route('single.blog', $blog->id) }}">{{ $blog->title }}</a>
                                            </h3>
                                            <p class="hidden md:block text-gray-600 leading-tight mb-1">
                                                {{ Str::limit($blog->dec, 50) }}
                                            </p>
                                            <a class="text-gray-500" href="{{ route('single.blog', $blog->id) }}"><span
                                                    class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $blog->cat }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- right -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                        <div class="w-full bg-gray-50 h-full">
                            <div class="text-sm py-6 sticky">
                                <div class="w-full text-center">
                                    <a class="uppercase" href="#">Advertisement</a>
                                    <a href="#">
                                        <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider news -->
        <div class="relative bg-gray-50"
            style="background-image: url('src/img/bg.jpg');background-size: cover;background-position: center center;background-attachment: fixed">
            <div class="bg-black bg-opacity-70">
                <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                    <div class="flex flex-row flex-wrap">
                        <div class="flex-shrink max-w-full w-full py-12 overflow-hidden">
                            <div class="w-full py-3">
                                <h2 class="text-white text-2xl font-bold text-shadow-black">
                                    <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>American
                                </h2>
                            </div>
                            <div id="post-carousel" class="splide post-carousel">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($blogs as $blog)
                                            
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="hover-img bg-white">
                                                    <a href="">
                                                        <img class="max-w-full w-full mx-auto"
                                                            src="{{ asset('admin-assets/images/' . $blog->image) }}"
                                                            alt="alt title" alt="alt title">
                                                    </a>
                                                    <div class="py-3 px-6">
                                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                                            <a href="#">{{ $blog->title }}</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span
                                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $blog->cat }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- block news -->
        <div class="bg-white py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink max-w-full w-full overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Africa
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            @foreach ($blogs as $blog)
                                <div
                                    class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                    <div class="flex flex-row sm:block hover-img">
                                        <a href="">
                                            <img class="max-w-full w-full mx-auto"
                                                src="{{ asset('admin-assets/images/' . $blog->image) }}" alt="alt title">
                                        </a>
                                        <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                            <h3 class="text-lg font-bold leading-tight mb-2">
                                                <a href="#">{{ $blog->title }}</a>
                                            </h3>
                                            <p class="hidden md:block text-gray-600 leading-tight mb-1">
                                                {{ Str::limit($blog->dec, 50) }}
                                            </p>
                                            <a class="text-gray-500" href="#"><span
                                                    class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{ $blog->cat }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

    </main><!-- end main -->
@endsection
