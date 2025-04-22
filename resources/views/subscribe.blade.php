@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Make the bold move to unlimited reads and other fantastice features')
@section('content')

<section class="section section-bottom-0 has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-xl-9 col-xxl-8">
                    <h6 class="overline-title text-primary">Unlimited Intimate Stories</h6>
                    <h2 class="title h1">Go beyond the limit. Unlock deeper, unforgettable stories that connect, heal, and excite.</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing">
                        <div class="pricing-body p-5">
                            <div class="text-center">
                                <h5 class="mb-3">Monthly Plan</h5>
                                <h3 class="h2 mb-2">£1.88 <span class="caption-text text-muted"> formally <span class="text-decoration-line-through">£5 </span></h3>
                                <p>Billed Monthly</p>
                                <a href="{{ url('show/plans') }}" class="btn btn-primary btn-soft btn-block">Start free trial today</a>
                            </div>
                            <ul class="list gy-3 pt-4 ps-2">
                                
                                <li><em class="icon ni ni-check text-success"></em> <span>Unlimited Stories Access</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Comment & bookmark</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>New stories weekly</span></li>
                               
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing pricing-featured bg-primary">
                        <div class="pricing-body p-5">
                            <div class="text-center">
                                <h5 class="mb-3">Bi-Annual</h5>
                                <h3 class="h2 mb-2">£11.28 <span class="caption-text text-muted"> formally <span class="text-decoration-line-through">£30 </span></span></h3>
                                <p> Billed every 6 months</p>
                                <a href="{{ url('show/plans') }}" class="btn btn-primary btn-block">Start free trial today</a>
                            </div>
                            <ul class="list gy-3 pt-4 ps-2">
                                
                                <li><em class="icon ni ni-check text-success"></em> <span>All Monthly features</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Priority access to trending stories</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Regular Technical Support</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Community spotlight access</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing">
                        <div class="pricing-body p-5">
                            <div class="text-center">
                                <h5 class="mb-3">Annual</h5>
                                <h3 class="h2 mb-2">£22.56 <span class="caption-text text-muted"> formally <span class="text-decoration-line-through">£60 </span></span></h3>
                                <p> Billed yearly</p>
                                <a href="{{ url('show/plans') }}" class="btn btn-primary btn-soft btn-block">Start free trial today</a>
                            </div>
                            <ul class="list gy-3 pt-4 ps-2">
                                {{-- <li><em class="icon ni ni-check text-success"></em> <span><strong>50,000</strong> Monthly Word Limit</span></li> --}}
                                {{-- <li><em class="icon ni ni-check text-success"></em> <span><strong>15+</strong> Templates</span></li> --}}
                                <li><em class="icon ni ni-check text-success"></em> <span>All Bi-Annual features</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Early invite to mobile app</span></li>
                                <li><em class="icon ni ni-check text-success"></em> <span>Refer a friend and get paid</span></li>
                                {{-- <li><em class="icon ni ni-check text-success"></em> <span>Unlimited Logins</span></li> --}}
                                {{-- <li><em class="icon ni ni-check text-success"></em> <span>Newest Features</span></li> --}}
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->
<section class="section section-bottom-0">
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8">
                    <h6 class="overline-title text-primary">FAQ'S</h6>
                    <h2 class="title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-xl-9 col-xxl-8">
                    <div class="accordion accordion-flush accordion-plus-minus accordion-icon-accent" id="faq-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1"> Can I read stories without subscribing?</button>
                            </h2>
                            <div id="faq-1-1" class="accordion-collapse collapse show" data-bs-parent="#faq-1">
                                <div class="accordion-body"> Yes! You can read up to 10 stories for free each month. After that, you’ll need a subscription to continue exploring more intimate moments shared by others. </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2">Is my story submission anonymous? </button>
                            </h2>
                            <div id="faq-1-2" class="accordion-collapse collapse" data-bs-parent="#faq-1">
                                <div class="accordion-body"> Completely. We never show names or email addresses. You’re free to share without judgment, and only the story matters. </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3"> What payment methods do you accept? </button>
                            </h2>
                            <div id="faq-1-3" class="accordion-collapse collapse" data-bs-parent="#faq-1">
                                <div class="accordion-body"> We accept major credit/debit cards and will be adding more options soon. All payments are securely processed. </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-4"> Will there be a mobile app? </button>
                            </h2>
                            <div id="faq-1-4" class="accordion-collapse collapse" data-bs-parent="#faq-1">
                                <div class="accordion-body">Yes! We're launching our mobile app soon. Subscribers will get early access and exclusive in-app features. </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-5"> Is this a hookup app? </button>
                            </h2>
                            <div id="faq-1-5" class="accordion-collapse collapse" data-bs-parent="#faq-1">
                                <div class="accordion-body"> No, it's not. This platform is about storytelling—real, vulnerable, and powerful moments of connection. It’s a space to reflect, relate, and be moved. </div>
                            </div>
                        </div
                    </div><!-- .accordion -->
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
                            {{-- <h6 class="overline-title text-primary">Boost your writing productivity</h6> --}}
                            <h2 class="title">Got a moment you can’t forget? Tell us.</h2>
                            <p class="lead mt-3">Share your most intimate memory anonymously — and let someone out there feel a little less alone.</p>
                            <ul class="btn-list btn-list-inline">
                                <li><a href="{{ url('submit')}}" class="btn btn-lg btn-primary"><span>Start writing for free</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                            </ul>
                            <ul class="list list-row gy-0 gx-3">
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Read</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Write</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Connect</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .section-content -->
        </div><!-- .section-wrap -->
    </div><!-- .container -->
</section><!-- .section -->
@endsection