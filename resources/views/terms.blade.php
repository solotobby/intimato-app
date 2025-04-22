@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Terms of Use')
@section('content')

<section class="section has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    {{-- <h6 class="overline-title text-primary">About Us</h6> --}}
                    <h2 class="title h1">Terms of Use</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center align-items-center flex-lg-row-reverse">
                
                <div class="col-lg-12">
                    <div class="block-text pe-xxl-7">
                        {{-- <h2 class="title">Generate months of social media content in minutes</h2> --}}
                        <p class="lead">
                            Welcome to Intimato❤️, a digital platform where people share intimate stories anonymously. By accessing or using our website, you agree to the following Terms & Conditions.
                        </p>
                        <p>
                            <b>1. What we Collect</b><br>
                            You must be at least 18 years old to use or access this platform.
                        </p>
                        <p>
                       
                           <b> 2. Community Rules </b><br>
                                When using the platform, you agree:
                                <ul class="list gy-3 pe-xxl-7">
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  Not to share illegal, violent, hateful, or abusive content </span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Not to submit any non-consensual material</span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> Not to post real names, photos, or identifying info </span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> That all stories you submit are your own or shared with full permission </span></li>
                                    <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span> We reserve the right to moderate, edit, or remove content that violates these rules. </span></li>
                                </ul>

                        </p>
                        <p>
                            <b>3. Content Ownership & Licensing </b><br>
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  You retain full ownership of your story. </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  By submitting, you grant us a non-exclusive, royalty-free license to publish your story on our platform and use excerpts for promotional purposes (e.g., social media, newsletters).                                </span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>  We will never attach your identity to your story. </span></li>

                            </ul>
                          
                        </p>
                        <p>
                            <b>4. Subscription & Payment </b><br>
                             Some content or features may require a subscription. By subscribing, you agree to recurring payments unless canceled.
                             Payments are securely handled via third-party services (PayPal). We do not store your payment information.
                            
                        </p>
                        <p>
                            <b>5. Termination</b> <br>
                            We may suspend or remove access to any user who violates our terms or posts harmful content.
                        </p>
                        <p>
                            <b>6. Changes to Terms</b> <br>
                            We may update these terms as needed. We'll notify users of major changes through the website or email.
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