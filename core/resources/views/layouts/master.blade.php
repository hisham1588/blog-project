<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Blog Project | @yield('pageTitle')</title>
    <meta name="description" content="Tailwind CSS News Template">

    <!-- Development css -->
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset("src/img/favicon.jpg")}}">

    
</head>



<body class="text-gray-700 pt-9 sm:pt-10">
    
    @include('layouts.includes.header')

    @include('layouts.includes.mobile-menu')

    {{-- data ta akhane recive kortese --}}
    @yield('content')

    @include('layouts.includes.footer')

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!--Vendor js-->
    <script src="{{asset("src/vendors/hc-sticky/dist/hc-sticky.js")}}"></script>
    <script src="{{asset("src/vendors/glightbox/dist/js/glightbox.min.js")}}"></script>
    <script src="{{asset("src/vendors/@splidejs/splide/dist/js/splide.min.js")}}"></script>
    <script src="{{asset("src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js")}}"></script>

    <!-- Start development js -->
    <script src="{{asset("src/js/theme.js")}}"></script>
    <!-- End development js -->

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>
