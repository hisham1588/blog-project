@extends('layouts.master')


@section('pageTitle')
    {{ $blog->title }}
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
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3 mb-3">
              <h2 class="text-gray-800 text-3xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> {{ $blog->title }}
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="max-w-full w-full px-4">
                <!-- Post content -->
                <div class="leading-relaxed pb-4">
                  <p class="mb-5">Aenean sodales lacus est, at ultricies augue ele ifend sit amet. <ins>Be yourself</ins> everyone else is already taken, sem mi placerat felis, ac suscip ligula ex id metus. Vivamus aliquet sit amet nisi non faucibus. Orci varius natoque penatibus et magnis dis parturient montes.</p>

                  <h2 class="text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Start your Morning with Smiles</h2>
                  <p class="mb-5">Integer egestas ipsum eget metus sodales consectetur. Nullam ultricies posuere cursus. Duis vitae lorem porta, venenatis nibh ac, laoreet massa. Nam risus lacus, porta eu diam id, fringilla porta risus. Aenean sit amet malesuada diam.</p>
                  <figure class="text-center mb-6">
                    <img class="max-w-full h-auto" src="{{ asset('admin-assets/images/' . $blog->image) }}" alt="Image description">
                    {{-- <figcaption> Type here your description</figcaption> --}}
                  </figure>
                  <h3 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">{{$blog->dec}}</h3>
                  <ul class="pl-8 mb-4">
                  
                  
                  
              

                <!-- Comments -->
                <div id="comments" class="pt-16">
                  <!--title-->
                  <h3 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">{{ count($comments) }} Comments</h3>

                  <!--comment list-->
                  <ol class="mb-4">
                    @foreach ($comments as $comment)
                      <li class="py-2 mt-6">
                        <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                          <footer>
                            <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="{{asset("src/img/avatar2.jpg")}}" alt="avatar">
                            <div>
                              <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">{{ $comment->name }}</a>
                              <span class="md:float-right text-sm">
                                <time datetime="2020-10-27">{{ date_format($blog->created_at,"Y-m-d")  }}</time>
                              </span>
                            </div>
                          </footer>
                          <div>
                            <p>{{ $comment->comment }}</p>
                          </div>
                        </div>
                      </li>
                    @endforeach
                    
                  </ol>

                  <!--comment form-->
                  <div id="comment-form" class="mt-12">
                    <h4 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">LEAVE A REPLY</h4>
                    <p class="mb-5">Your email address will not be published</p>
                    <div>
                      <form action="{{ route('comment.post') }}" method="POST" novalidate="">
                        @csrf
                        <div class="mt-2"></div>
                        <input type="hidden" name="blog_id" value="{{$blog->id}}" >
                        <div class="mb-6">
                          <textarea name="comment" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Comment" aria-label="insert comment" rows="4" required=""></textarea>
                        </div>
                        <div class="mb-6">
                          <input name="name" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Name" aria-label="name" type="text" required="">
                        </div>
                        <div class="mb-6">
                          <button type="submit" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">Post Comment</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Most Popular</h2>
                </div>
                <ul class="post-number">
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                  </li>
                </ul>
              </div>
            </div>

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
  </main><!-- end main -->

@endsection
