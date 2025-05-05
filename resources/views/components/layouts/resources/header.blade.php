<div class="nk-header nk-header-fixed">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-header-logo ms-n1">
                <div class="nk-sidebar-toggle me-1">
                    <button class="btn btn-sm btn-zoom btn-icon sidebar-toggle d-sm-none">
                        <em class="icon ni ni-menu"> </em>
                    </button>
                    <button class="btn btn-md btn-zoom btn-icon sidebar-toggle d-none d-sm-inline-flex">
                        <em class="icon ni ni-menu"> </em>
                    </button>
                </div><!-- .nk-sidebar-toggle -->
                <a href="{{ url('dashboard') }}" class="logo-link">
                    <div class="logo-wrap">
                        <span style="font-size: x-large; color: black; display: inline-flex; align-items: center; gap: 4px;">
                            <strong>Intimatu</strong>
                            <i class="off icon ni ni-heart"></i>
                        </span>
                        {{-- <strong style="font-size: x-large">Intimatu  <em class="off icon ni ni-heart"></em></strong> --}}
                        {{-- <img class="logo-img logo-light" src="images/logo.png" srcset="images/logo2x.png 2x" alt="">
                        <img class="logo-img logo-dark" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x" alt="">
                        <img class="logo-img logo-icon" src="images/logo-icon.png" srcset="images/logo-icon2x.png 2x" alt=""> --}}
                    </div>
                </a>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav ms-2">
                    <li class="dropdown d-inline-flex">
                        <a data-bs-toggle="dropdown" class="d-inline-flex" href="#">
                            <div class="media media-md media-circle media-middle text-bg-primary">
                                <em class="off icon ni ni-user"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md rounded-3">
                            <div class="dropdown-content py-3">
                                <div class="border border-light rounded-3">
                                    {{-- <div class="px-3 py-2 bg-white border-bottom border-light rounded-top-3">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <h6 class="lead-text">Free Plan</h6>
                                            <a class="link link-primary" href="#">
                                                <em class="ni ni-spark-fill icon text-warning"></em>
                                                <span>Upgrade</span>
                                            </a>
                                        </div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar" data-progress="25%"></div>
                                        </div> --
                                       <h6 class="lead-text mt-2">1,360 <span class="text-light">words left</span></h6>
                                    </div> --}}
                                    <a class="d-flex px-3 py-2 bg-primary bg-opacity-10 rounded-bottom-3" href="{{url('dashboard')}}">
                                        <div class="media-group">
                                            <div class="media media-sm media-middle media-circle text-bg-primary">
                                                <em class="off icon ni ni-user"></em>
                                            </div>
                                            <div class="media-text">
                                                <h6 class="fs-6 mb-0">{{auth()->user()->name}}</h6>
                                                <span class="text-light fs-7">{{auth()->user()->email}}</span>
                                            </div>
                                            <em class="icon ni ni-chevron-right ms-auto ps-1"></em>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>