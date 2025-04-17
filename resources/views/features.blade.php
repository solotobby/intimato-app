@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Featured Categories')
@section('content')

<section class="section has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    {{-- <h6 class="overline-title text-primary">About Us</h6> --}}
                    <h2 class="title h1">Featured Categories</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center align-items-center flex-lg-row-reverse">
                
                <div class="col-lg-12">
                    <div class="block-text pe-xxl-7">
                        {{-- <h2 class="title">Generate months of social media content in minutes</h2> --}}
                        <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <ul class="list gy-3 pe-xxl-7">
                            <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Analyze your business cost easily with group transaction thorugh tagging feature.</span></li>
                            <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Arrange your business expenses by date, name, etc.</span></li>
                        </ul>
                        <ul class="btn-list btn-list-inline gy-0">
                            <li><a href="{{ url('register') }}" class="btn btn-lg btn-primary"><span>Get Started</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->

@endsection