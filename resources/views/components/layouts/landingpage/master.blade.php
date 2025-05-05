<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Intimatu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="keywords" content="{{ $keywords }}"> --}}
    <link rel="shortcut icon" href="images/favicons.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets_/css/style.css?v1.5.0')}}">
</head>

<body class="nk-body " data-menu-collapse="lg">
    <div class="nk-app-root ">
        
       @include('components.layouts.landingpage.header')

        <main class="nk-pages">
            @yield('content')
            
        </main>
        @include('components.layouts.landingpage.footer')
    </div>
    <script src="{{asset('assets_/js/bundle.js?v1.5.0')}}"></script>
    <script src="{{asset('assets_/js/scripts.js?v1.5.0')}}"></script>
</body>

</html>