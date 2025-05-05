{{-- <x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Intimatu</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v1.0.0')}}">
</head>

<body class="nk-body ">
    <div class="nk-app-root " data-sidebar-collapse="lg">
        <div class="nk-main">
            @include('components.layouts.resources.sidebar')
            <div class="nk-wrap">

                
                @include('components.layouts.resources.header')

                <div class="nk-content">
                    {{ $slot }}

                   

                </div>

                @include('components.layouts.resources.footer')
                


            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/bundle.js?v1.0.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?v1.0.0')}}"></script>
</body>

</html>
