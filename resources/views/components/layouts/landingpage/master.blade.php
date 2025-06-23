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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-80MR2MJQ26"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-80MR2MJQ26');
    </script>

    <!-- TikTok Pixel Code Start -->
    <script>
    !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
    var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
    ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
    
    
      ttq.load('D0LM2OJC77UACK91N9NG');
      ttq.page();
    }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->
    
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