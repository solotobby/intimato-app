@extends('components.layouts.landingpage.master')
@section('title', 'Intitmatu - Share stories of intimate moments')
@section('content')

<section class="section section-bottom-0 has-shape">
    <div class="nk-shape bg-shape-blur-a mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="container">
        {{-- <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    <h6 class="overline-title text-primary">Get started for free</h6>
                    <h2 class="title">Explore different Categories</h2>
                    <p class="lead">Give our AI a few descriptions and we'll automatically create blog articles, product descriptions and more for you within just few second.</p>
                </div>
            </div>
        </div> --}}
        <!-- .section-head -->

        <div class="section-content">
            <div class="row g-gs">
                @foreach ($posts as $item)
                <div class="col-md-6 col-xl-4">
                    <div class="card border-0 shadow-tiny rounded-4">
                        <div class="card-body p-4">
                            {{-- <a class="d-block" href="blog-single.html"><img class="rounded-4 w-100" src="images/blog/a.jpg" alt=""></a> --}}
                            <a href="#" class="badge px-3 py-2 mt-4 mb-3 text-bg-primary-soft fw-normal rounded-pill">{{ $item->category}}</a>
                            <h3><a href="{{ url('story/'.$item->_id) }}" class="link-dark line-clamp-2">{{$item->where_it_happen}}</a></h3>
                            <div class="d-flex pt-4">
                                <div class="media media-lg media-middle media-lg rounded-pill">
                                    <em class="icon mx-0 ni ni-user"></em>
                                    {{-- <img src="{{asset('assets/images/avatar/author/sm-d.jpg')}}" alt=""> --}}
                                </div>
                                <div class="media-info ms-3">
                                    <h6 class="mb-1">Anonymous</h6>
                                    <ul class="list list-row gx-1">
                                        {{-- <li>
                                            <div class="sub-text">Feb 10, 2023</div>
                                        </li> --}}
                                        <li><em class="icon mx-0 ni ni-eye"></em></li>
                                        <li>
                                            <div class="sub-text">{{ $item->views }}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                @endforeach
                
                
            </div><!-- .row -->
        </div>


        {{-- <div class="section-content">
            <div class="row text-center g-gs">
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-book-read"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Blog Post &amp; Articles</h4>
                                    <p>Generate optimized blog post and articles to get organic traffic - making you visible to the world. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-card-view"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Product Description</h4>
                                    <p>Create a perfect description for your products to engage your customers to click and buy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-facebook-f"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Social Media Ads</h4>
                                    <p>Create ads copies for your social media - make an impact with your online marketing campaigns.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-grid-plus"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Product Benefits</h4>
                                    <p>Create a bullet point list of your product benefits that appeal to your customers to purchase.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-layout2"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Landing Page Content</h4>
                                    <p>Write very attractive headlines, slogans or paragraph for your landing page of your website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card rounded-4 border-0 shadow-tiny h-100">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-media">
                                    <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                                        <em class="icon ni ni-loader"></em>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title">Suggest Improvements</h4>
                                    <p>Need to improve your existing content? Our AI will rewrite and improve the content for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content --> --}}
    </div><!-- .container -->
</section><!-- .section -->
{{-- <section class="section has-mask">
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-10p mb-3"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    <h6 class="overline-title text-primary">How it works</h6>
                    <h2 class="title">Instruct to our AI and generate copy</h2>
                    <p class="lead">Give our AI a few descriptions and we'll automatically create blog articles, product descriptions and more for you within just few second.</p>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs">
                <div class="col-lg-4">
                    <div class="feature feature-inline">
                        <div class="feature-text me-auto">
                            <h4 class="title">Select writing template</h4>
                            <p>Simply choose a template from available list to write content for blog posts, landing page, website content etc. </p>
                        </div>
                        <div class="feature-decoration flex-shrink-0 ms-4">
                            <img src="images/number/1.png" alt="">
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="feature feature-inline">
                        <div class="feature-text me-auto">
                            <h4 class="title">Describe your topic</h4>
                            <p>Provide our AI content writer with few sentences on what you want to write, and it will start writing for you. </p>
                        </div>
                        <div class="feature-decoration flex-shrink-0 ms-4">
                            <img src="images/number/2.png" alt="">
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="feature feature-inline">
                        <div class="feature-text me-auto">
                            <h4 class="title">Generate quality content</h4>
                            <p>Our powerful AI tools will generate content in few second, then you can export it to wherever you need.</p>
                        </div>
                        <div class="feature-decoration flex-shrink-0 ms-4">
                            <img src="images/number/3.png" alt="">
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
        <div class="section-actions text-center">
            <ul class="btn-list btn-list-inline gx-gs gy-3">
                <li><a href="#" class="btn btn-primary btn-lg"><span>Start free trial today</span></a></li>
                <li><a href="#" class="btn btn-primary btn-soft btn-lg"><em class="icon ni ni-play"></em><span>See action in video</span></a></li>
            </ul>
        </div><!-- .section-actions -->
        
    </div><!-- .container -->
</section><!-- .section -- --}}


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