@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Share stories of intimate moments')
@section('content')

<section class="section has-mask">
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10">
                    <div class="text-center">
                        <h6 class="overline-title text-primary">{{ $post->category }}</h6>
                        <h1 class="title">{{ $post->where_it_happen }}</h1>
                        <ul class="list list-row gx-2">
                            {{-- <li>
                                <div class="sub-text fs-5">Feb 10, 2023</div>
                            </li> --}}
                            <li><em class="icon mx-0 ni ni-eye"></em></li>
                            <li>
                                <div class="sub-text fs-5">{{ $post->views }} </div>
                                {{-- - {{ session('readCount') }} --}}
                            </li>
                        </ul>
                        <div class="my-5">
                            <img class="rounded-4 w-100" src="images/blog/cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="block-typo">
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Age when it Happened: {{ $post->age }}</span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Gender: {{ $post->gender }}</span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Rating: {{ $post->rating }}/5</span></li>
                            </ul>

                            {!! $post->story !!}

                        </div>
                        {{-- <ul class="btn-list gy-3 ps-xl-6 ps-lg-4 ps-3">
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-facebook-circle"></em></a></li>
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-twitter"></em></a></li>
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-linkedin-round"></em></a></li>
                        </ul> --}}
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section section-bottom-0">
    <div class="container">
        <div class="section-wrap bg-primary bg-opacity-10 rounded-4">
            <div class="section-content bg-pattern-dot-sm p-4 p-sm-6">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-xxl-9">
                        <div class="block-text">
                            <h6 class="overline-title text-primary">Share your Story</h6>
                            <h2 class="title">Got a moment you can’t forget? Tell us.</h2>
                            <p class="lead mt-3">Share your most intimate memory anonymously — and let someone out there feel a little less alone.</p>
                            <ul class="btn-list btn-list-inline">
                                <li><a href="{{ url('submit') }}" class="btn btn-lg btn-primary"><span>Start writing</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                            </ul>
                            {{-- <ul class="list list-row gy-0 gx-3">
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>No credit card required</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Cancel anytime</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>10+ tools to expolore</span></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div><!-- .section-content -->
        </div><!-- .section-wrap -->
    </div><!-- .container -->
</section>


@endsection