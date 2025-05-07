{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                    </span>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="flex flex-col gap-6">
                   
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html> --}}


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
            <div class="nk-wrap has-shape flex-column">
                <div class="nk-shape bg-shape-blur-a start-0 top-0"></div>
                <div class="nk-shape bg-shape-blur-b end-0 bottom-0"></div>
              
                <div class="text-center pt-5">

                    <a href="{{url('/')}}" class="logo-link">
                        <span style="font-size: xx-large; color: black; display: inline-flex; align-items: center; gap: 4px;">
                            <strong>Intimatu</strong>
                            <i class="off icon ni ni-heart"></i>
                        </span>
                        
                        {{-- <div class="logo-wrap">    
                            {{-- <strong style="font-size: xx-large">Intimatu <span class="off icon ni ni-heart"></span></strong> --}}
                            {{-- <img class="logo-img logo-light" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo2x.png 2x')}}" alt="">
                            <img class="logo-img logo-dark" src="{{asset('images/logo-dark.png')}}" srcset="{{asset('images/logo-dark2x.png 2x')}}" alt="">
                            <img class="logo-img logo-icon" src="{{asset('images/logo-icon.png')}}" srcset="{{asset('images/logo-icon2x.png 2x')}}" alt=""> --
                        </div> --}}
                    </a>
                </div>
                <div class="container p-2 p-sm-4 mt-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-5 col-xl-5 col-xxl-4">
                            <div class="nk-block">


                                {{ $slot }}


                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-footer">
                    <div class="container-xl">
                        <div class="d-flex align-items-center flex-wrap justify-content-between mx-n3">
                            <div class="nk-footer-links px-3">
                                <ul class="nav nav-sm">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('privacy') }}">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('terms') }}">Terms & Condition</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="nk-footer-copyright fs-6 px-3"> &copy; {{date('Y')}} All Rights Reserved to  
                                <span style="font-size:largess; color: black; display: inline-flex; align-items: center; gap: 4px;">
                                    <strong>Intimatu</strong>
                                    <i class="off icon ni ni-heart"></i>
                                </span>. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/bundle.js?v1.0.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?v1.0.0')}}"></script>
</body>

</html>
