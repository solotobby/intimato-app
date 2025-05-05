<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="nk-content">
        <div class="container-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-page-head">
                        <div class="nk-block-head-between">
                            <div class="nk-block-head-content">
                                <h2 class="display-6">Pricing Plans</h2>

                                @foreach($settings as $setting)
                                    Product Name: <b><i>{{ $setting->name }}</i></b><br>
                                    Product ID: <b><i>{{ $setting->parameter }}</i></b><br>
                                @endforeach


                               {{-- <a href="{{ route('generate.paypal.product') }}" class="btn btn-primary w-100">Generate Paypal Product ID</a> --}}
                            </div>
                        </div>
                    </div><!-- .nk-page-head -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="nk-block">
                        {{-- <div class="pricing-toggle-wrap mb-4">
                            <button class="pricing-toggle-button active" data-target="monthly">Monthly</button>
                            <button class="pricing-toggle-button" data-target="yearly">Yearly (Save 25%)</button>
                        </div><!-- .pricing-toggle --> --}}
                        <div class="card mt-xl-5">
                            <div class="row g-0">

                                @foreach ($plans as $plan)
                                <div class="col-xl-4">

                                    @if($plan->name == 'Bi-Annual')

                                    <div class="pricing pricing-featured mx-n1px my-xl-n1px bg-primary mt-5">
                                        <div class="position-absolute text-center py-1 px-4 text-bg-primary rounded-top start-0 end-0 bottom-100">
                                            <div class="fw-medium lh-sm fs-14px">Most Popular</div>
                                        </div>

                                @else
                                        <div class="pricing bg-white rounded-start">
                                @endif

                                  
                                        <div class="pricing-content">
                                            <div class="w-sm-70 w-md-50 w-xl-100 text-center text-xl-start mx-auto">
                                                <h5 class="fw-normal text-light">Basic</h5>
                                                <h2 class="mb-3">{{ $plan->name }}</h2>
                                                <div class="pricing-price-wrap">
                                                    <div class="pricing-price">
                                                        <h4 class=" mb-3">{{ $plan->amount }} / discount {{ $plan->discount_amount }}</h4>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    @if($plan->plan_id == null)
                                                    <a href="{{ url('generate/paypal/plan/'.$plan->id) }}" class="btn btn-primary w-100">Generate Paypal Amount</a>
                                                    @endif
                                                    
                                                    @if($plan->discount_plan_id == null)
                                                        <a href="{{ url('generate/paypal/discount/'.$plan->id) }}" class="btn btn-outline-light w-100">Generate Paypal Discount Amount</a>
                                                    @endif
                                                    <div class="d-flex align-items-center justify-content-center text-center text-light fs-12px lh-lg fst-italic mt-1">
                                                        <svg width="13" height="13" viewBox="0 0 13 13" class="text-danger" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.5 2.375V10.625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 4.4375L10.0719 8.5625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 8.5625L10.0719 4.4375" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="ms-1">Cancel Anytime</span>
                                                    </div>
                                                </div>
                                                <ul class="pricing-features">
                                                    @if($plan->name == 'Monthly')
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Unlimited Stories Access</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Comment & bookmark</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>New stories weekly</span></li>

                                                    @elseif($plan->name == 'Bi-Annual')
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>All Monthly features</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Priority access to trending stories</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Regular Technical Support</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Community spotlight access</span></li>
                                                    @else
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>All Bi-Annual features</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Early invite to mobile app</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Refer a friend and get paid</span></li>
                                                    @endif
                                                    <hr>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Normal PAYPAL ID: <b><i>{{ $plan->plan_id}}</i></b></span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em> <span>Discounted PAYPAL ID: <b><i>{{ $plan->discount_plan_id}}</i></b></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->

                                @endforeach
                               

                                {{-- <div class="col-xl-4">
                                    <div class="pricing pricing-featured mx-n1px my-xl-n1px bg-primary mt-5">
                                        <div class="position-absolute text-center py-1 px-4 text-bg-primary rounded-top start-0 end-0 bottom-100">
                                            <div class="fw-medium lh-sm fs-14px">Most Popular</div>
                                        </div>
                                        <div class="pricing-content bg-primary-soft">
                                            <div class="w-sm-70 w-md-50 w-xl-100 text-center text-xl-start mx-auto">
                                                <h5 class="fw-normal text-light">Professional</h5>
                                                <h2 class="mb-3 text-primary">Customized Plan</h2>
                                                <div class="pricing-price-wrap">
                                                    <div class="pricing-price pricing-toggle-content monthly active">
                                                        <h3 class="display-1 mb-3 fw-semibold">$48 <span class="caption-text text-light fw-normal"> / month</span></h3>
                                                    </div>
                                                    <div class="pricing-price pricing-toggle-content yearly">
                                                        <h3 class="display-1 mb-3 fw-semibold">$500 <span class="caption-text text-light fw-normal"> / year</span></h3>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="pricing-price pricing-toggle-content monthly active">
                                                        <button class="btn btn-primary w-100">Upgrade Now</button>
                                                    </div>
                                                    <div class="pricing-price pricing-toggle-content yearly">
                                                        <button class="btn btn-primary w-100">Upgrade Now</button>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center text-center text-light fs-12px lh-lg fst-italic mt-1">
                                                        <svg width="13" height="13" viewBox="0 0 13 13" class="text-danger" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.5 2.375V10.625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 4.4375L10.0719 8.5625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 8.5625L10.0719 4.4375" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="ms-1">Cancel Anytime</span>
                                                    </div>
                                                </div>
                                                <ul class="pricing-features">
                                                    <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Unlimited words generation</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Access to all templates for free</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>No project limitation</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>30 days of AI generation history</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Wordpress plugin integration</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xl-4">
                                    <div class="pricing bg-white rounded-end">
                                        <div class="pricing-content">
                                            <div class="w-sm-70 w-md-50 w-xl-100 text-center text-xl-start mx-auto">
                                                <h5 class="fw-normal text-light">Enterprise</h5>
                                                <h2 class="mb-3">Customized Plan</h2>
                                                <div class="pricing-price-wrap">
                                                    <div class="pricing-price pricing-toggle-content monthly active">
                                                        <h3 class="display-1 mb-3 fw-semibold">$225 <span class="caption-text text-light fw-normal"> / month</span></h3>
                                                    </div>
                                                    <div class="pricing-price pricing-toggle-content yearly">
                                                        <h3 class="display-1 mb-3 fw-semibold">$2500 <span class="caption-text text-light fw-normal"> / year</span></h3>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="pricing-price pricing-toggle-content monthly active">
                                                        <button class="btn btn-outline-light w-100">Upgrade Now</button>
                                                    </div>
                                                    <div class="pricing-price pricing-toggle-content yearly">
                                                        <button class="btn btn-outline-light w-100">Contact Sales</button>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center text-center text-light fs-12px lh-lg fst-italic mt-1">
                                                        <svg width="13" height="13" viewBox="0 0 13 13" class="text-danger" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.5 2.375V10.625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 4.4375L10.0719 8.5625" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.9281 8.5625L10.0719 4.4375" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="ms-1">Cancel Anytime</span>
                                                    </div>
                                                </div>
                                                <ul class="pricing-features">
                                                    <li><em class="icon text-primary ni ni-check-circle"></em><span>Dedicated Account Manager</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em><span>Custom Tools</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em><span>Advanced Integrations</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em><span>Premium Technical Support</span></li>
                                                    <li><em class="icon text-primary ni ni-check-circle"></em><span>Many More Special Features</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col --> --}}
                            </div><!-- .row -->
                        </div>
                        {{-- <div class="mt-5">
                            <h5>Want to learn more about our pricing &amp; plans?</h5>
                            <p>Read our <a href="pricing-plans.html">Plans</a>, <a href="#">Billing &amp; Payment</a>, <a href="#">FAQs</a> to learn more about our service.</p>
                        </div> --}}
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

</div>
