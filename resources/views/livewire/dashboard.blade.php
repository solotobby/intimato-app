<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- <flux:fieldset>
        <flux:heading size="xl" level="1">Latest Story</flux:heading>
        <br>
        {{-- <flux:legend size="xl" level="1" >Lastest Story</flux:legend> --
       
            <div class="space-y-4">
                @foreach ($list as $ls)
                    <flux:heading level="1">{{$ls->where_it_happen}}</flux:heading>
                        <flux:text class="mt-2">   {!! \Illuminate\Support\Str::words($ls->story, 35) !!}</flux:text>
                        <flux:button size="sm"><a href="{{ url('story/'.$ls->_id) }}">Continue Reading</a></flux:button>
                    <flux:separator variant="subtle" />
                @endforeach
            </div>

    </flux:fieldset> --}}

    <div class="container-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-page-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="display-6">Latest Story</h2>
                        </div>
                        {{-- <div class="nk-block-head-content">
                            <div class="d-flex gap gx-4">
                                <div class="">
                                    <ul class="d-flex gap gx-2">
                                        <li>
                                            <a href="templates-list.html" class="btn btn-md btn-icon btn-primary btn-soft"><em class="icon ni ni-view-list-wd"></em></a>
                                        </li>
                                        <li>
                                            <a href="templates.html" class="btn btn-md btn-icon btn-outline-light"><em class="icon ni ni-grid-fill"></em></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="form-control-wrap">
                                        <div class="form-control-icon start md text-light">
                                            <em class="icon ni ni-search"></em>
                                        </div>
                                        <input type="text" class="form-control form-control-md" placeholder="Search Template">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div><!-- .nk-page-head -->
                <div class="nk-block">
                    <ul class="filter-button-group mb-5">
                        {{--<li><button class="filter-button active" type="button" data-filter="*"> All </button></li>
                        <li><button class="filter-button" type="button" data-filter=".blog-content"> Blog Content </button></li>
                        <li><button class="filter-button" type="button" data-filter=".social-media"> Social Media </button></li>
                        <li><button class="filter-button" type="button" data-filter=".website-copy-seo"> Website Copy &amp; SEO </button></li> --}}
                    </ul>
                    <div class="row g-gs filter-container">

                        @foreach ($list as $ls)
                            <div class="col-12 filter-item blog-content" data-category="blog-content">
                                <a href="{{ url('view/story/'.$ls->_id) }}">
                                <div class="d-flex position-relative">
                                    {{-- <div class="d-inline-flex position-absolute end-0 top-0">
                                        <div class="badge text-bg-dark rounded-pill text-uppercase">New</div>
                                    </div> --}}
                                    <div class="media media-rg media-middle media-circle text-primary bg-primary bg-opacity-20 mb-3">
                                        <em class="icon ni ni-list-thumb-fill"></em>
                                    </div>
                                    <div class="ms-4 pb-gs border-bottom border-light flex-grow-1">
                                        <h5 class="fs-4 fw-medium">{{$ls->where_it_happen}}</h5>

                                        <p class="small text-light line-clamp-2">
                                            {!! \Illuminate\Support\Str::words($ls->story, 35) !!}
                                           {{-- <span style="color: black"> {!! \Illuminate\Support\Str::words($ls->story, 35) !!}</span> --}}
                                        </p>

                                    </div>
                                </div>
                                </a>
                            </div><!-- .col -->
                        @endforeach

                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>


