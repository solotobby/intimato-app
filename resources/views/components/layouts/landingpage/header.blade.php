<header class="nk-header has-mask">
    <div class="nk-mask bg-gradient-a"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-top"></div>
    <div class="nk-header-main nk-menu-main will-shrink is-transparent ignore-mask">
        <div class="container">
            <div class="nk-header-wrap">
                <div class="nk-header-logo">
                    <a href="{{url('/')}}" class="logo-link">
                        <div class="logo-wrap">
                            <strong style="font-size: x-large">Intimatu  <em class="off icon ni ni-heart"></em></strong>
                            {{-- <img class="logo-img logo-light" src="images/logo.png" srcset="images/logo2x.png 2x" alt="">
                            <img class="logo-img logo-dark" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x" alt=""> --}}
                        </div>
                    </a>
                </div><!-- .nk-header-logo -->
                <div class="nk-header-toggle">
                    <button class="dark-mode-toggle">
                        <em class="off icon ni ni-sun-fill"></em>
                        <em class="on icon ni ni-moon-fill"></em>
                    </button>
                    <button class="btn btn-light btn-icon header-menu-toggle">
                        <em class="icon ni ni-menu"></em>
                    </button>
                </div>
                <nav class="nk-header-menu nk-menu">
                    <ul class="nk-menu-list mx-auto">
                        <li class="nk-menu-item has-dropdown">
                            <a href="{{ url('/') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Home</span>
                            </a>
                          
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ url('about') }}" class="nk-menu-link">
                                <span class="nk-menu-text">About Us</span>
                            </a>
                        </li>
                        {{-- <li class="nk-menu-item">
                            <a href="{{ url('categories') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Featured Categories</span>
                            </a>
                        </li> --}}
                        <li class="nk-menu-item">
                            <a href="{{ url('terms') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Terms of Use</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ url('privacy') }}" class="nk-menu-link">
                                <span class="nk-menu-text">Privacy Policy</span>
                            </a>
                        </li>
                    </ul><!-- .nk-menu-list -->
                    {{-- <div class="mx-2 d-none d-lg-block">
                        <button class="dark-mode-toggle">
                            <em class="off icon ni ni-sun-fill"></em>
                            <em class="on icon ni ni-moon-fill"></em>
                        </button>
                    </div> --}}
                    <ul class="nk-menu-buttons flex-lg-row-reverse">
                        <li><a href="{{route('submit') }}" class="btn btn-primary">Submit Story</a></li>
                        <li><a class="link link-dark" href="{{route('login')}}">Login </a></li>
                    </ul><!-- .nk-menu-buttons -->
                </nav><!-- .nk-header-menu -->
            </div><!-- .nk-header-wrap -->
        </div><!-- .container -->
    </div><!-- .nk-header-main -->
    @if (request()->is('/'))
    <div class="nk-hero pt-xl-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="nk-hero-content py-5 py-lg-6">
                        <h1 class="title mb-3 mb-lg-4">What’s your secret? Discover stories you’ll never forget</h1>
                        <p class="lead px-md-8 px-lg-6 mb-4 mb-lg-5">A private space to read and share intimate, anonymous bedroom moments.</p>
                        <ul class="btn-list btn-list-inline">
                            <li><a href="{{url('register')}}" class="btn btn-secondary btn-lg"><span>Start sharing your stories</span></a></li>
                        </ul>
                        {{-- <p class="sub-text mt-2">No credit card required</p> --}}
                    </div>
                    {{-- <div class="nk-hero-gfx">
                        <img class="w-100 rounded-top-4" src="images/gfx/banner/a.jpg" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div><!-- .nk-hero -->
    @endif

</header><!-- .nk-header -->











