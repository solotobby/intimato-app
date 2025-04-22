@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Privacy Policy')
@section('content')


<section class="section has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    {{-- <h6 class="overline-title text-primary">About Us</h6> --}}
                    <h2 class="title h1">Privacy Policy</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center align-items-center flex-lg-row-reverse">
                
                <div class="col-lg-12">
                    <div class="block-text pe-xxl-7">
                        {{-- <h2 class="title">Generate months of social media content in minutes</h2> --}}
                        <p class="lead">
                            <b>Your privacy matters to us.</b> Intimato❤️ is built on the idea of safe, anonymous sharing. Here’s how we protect your information.
                        </p>
                        <p>
                            <b>1. What we Collect </b><br>
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  Email address (subscribers only) </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Anonymous story submissions</span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Basic analytics (browser, location city-level, device) </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Payment details (handled via Stripe or PayPal — we do not store these) </span></li>
                            </ul>
                        </p>
                        <p>
                       
                           <b> 2. What we don't Collect</b><br>
                               
                                <ul class="list gy-3 pe-xxl-7">
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Real names (unless you provide them — which we ask you not to) </span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Photos or files</span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Contact lists or phone data </span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> GPS-level location data </span></li>
                               </ul>

                        </p>
                        <p>
                            <b>3. What we use data for </b><br>
                            
                           
                          
                        </p>
                        <p>
                            <b>4. Your Rights </b><br>
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  Delete your submitted Stories </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  Canncel Subscription </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Ask what Data we have on you - we will respond in 7 working days</span></li>
                                {{-- <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Improving the platform experience </span></li> --}}

                            </ul>
                            
                            
                        </p>
                        <p>
                            <b>5. Cookies and Tracking</b> <br>
                            We use simple cookies for:
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  Anonymous tracking </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Session tracking </span></li>
                            </ul>
                        </p>
                        <p>
                            <b>6. Data Sharing</b> <br>
                            We never sell or share your personal data with advertisers or third parties. The only exception is anonymized analytics to improve performance (e.g., Google Analytics).
                        </p>
                        <p>
                            <b>7. Contact </b> <br>
                            If you have questions, concerns, or want to request data deletion, contact us at: hello@intimato.com
                        </p>
                        
                        <ul class="btn-list btn-list-inline gy-0">
                            <li><a href="{{ url('register') }}" class="btn btn-lg btn-primary"><span>Start Reading now</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                        </ul>

                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->

@endsection