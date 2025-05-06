<div class="nk-sidebar nk-sidebar-fixed" id="sidebar">
    <div class="nk-compact-toggle">
        <button class="btn btn-xs btn-outline-light btn-icon compact-toggle text-light bg-white rounded-3">
            <em class="icon off ni ni-chevron-left"></em>
            <em class="icon on ni ni-chevron-right"></em>
        </button>
    </div>
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{url('dashboard')}}" class="logo-link">
                <div class="logo-wrap">
                    <span style="font-size: x-large; color: black; display: inline-flex; align-items: center; gap: 4px;">
                        <strong>Intimatu</strong>
                        <i class="off icon ni ni-heart"></i>
                    </span>
                    {{-- <img class="logo-img logo-light" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo2x.png 2x')}}" alt="">
                    <img class="logo-img logo-dark" src="{{asset('images/logo-dark.png')}}" srcset="{{asset('images/logo-dark2x.png 2x')}}" alt="">
                    <img class="logo-img logo-icon" src="{{asset('images/logo-icon.png')}}" srcset="{{asset('images/logo-icon2x.png 2x')}}" alt=""> --}}
                </div>
            </a>
        </div><!-- end nk-sidebar-brand -->
    </div><!-- end nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content h-100" data-simplebar>
            <div class="nk-sidebar-menu">
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{url('dashboard')}}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-dashboard-fill"></em>
                            </span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('create.story')}}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-edit"></em>
                            </span>
                            <span class="nk-menu-text">Make a Post</span>
                        </a>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="{{route('my.stories')}}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-list"></em>
                            </span>
                            <span class="nk-menu-text">My Stories</span>
                        </a>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="{{route('show.plans')}}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-sign-usd"></em>
                            </span>
                            <span class="nk-menu-text">Show Plans</span>
                        </a>
                    </li>
                   
                    @if(auth()->user()->role == 'admin')
                    <hr>
                        <li class="nk-menu-item has-sub">
                            <a href="{{route('admin.dashboard')}}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-dashboard"></em>
                                </span>
                                <span class="nk-menu-text">Admin Dashboard</span>
                            </a>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="{{route('admin.subscription')}}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-list"></em>
                                </span>
                                <span class="nk-menu-text">Subscription Mgt.</span>
                            </a>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="{{route('admin.tags')}}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-list"></em>
                                </span>
                                <span class="nk-menu-text">Tags</span>
                            </a>
                        </li>
                    @endif
                    
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-signout"></em>
                            </span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                        {{--<li class="nk-menu-item has-sub">
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="document-saved.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Saved</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="document-drafts.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Drafts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-edit"></em>
                            </span>
                            <span class="nk-menu-text">Editor</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="document-editor.html" class="nk-menu-link">
                                    <span class="nk-menu-text">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="document-editor-generate.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Generate</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="document-editor-edit.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Edit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="templates.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-layers"></em>
                            </span>
                            <span class="nk-menu-text">Templates</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="history.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-clock"></em>
                            </span>
                            <span class="nk-menu-text">History</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="pricing-plans.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-sign-usdc"></em>
                            </span>
                            <span class="nk-menu-text">Pricing Plans</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="profile.html" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-user"></em>
                            </span>
                            <span class="nk-menu-text">Profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="payment.html" target="_blank" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-wallet"></em>
                            </span>
                            <span class="nk-menu-text">Payments</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-signin"></em>
                            </span>
                            <span class="nk-menu-text">Auth Pages</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="login.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Login</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="create-account.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Register</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="forgot-password.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Forgot Password</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="check-email.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Check Email</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="verify-email.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Verify Email</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="email-verified.html" target="_blank" class="nk-menu-link">
                                    <span class="nk-menu-text">Email Verified</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Components</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-buttons.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-view-grid-wd"></em>
                            </span>
                            <span class="nk-menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-badges.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-ticket"></em>
                            </span>
                            <span class="nk-menu-text">Badges</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-alert.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-alert"></em>
                            </span>
                            <span class="nk-menu-text">Alert</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-dropdown.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-notify"></em>
                            </span>
                            <span class="nk-menu-text">Dropdown</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-todo"></em>
                            </span>
                            <span class="nk-menu-text">Forms</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="component-form-basic.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Basic</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="component-form-advanced.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Form Advanced</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-tabs.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-browser"></em>
                            </span>
                            <span class="nk-menu-text">Tabs</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-modals.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-property"></em>
                            </span>
                            <span class="nk-menu-text">Modal</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-popover-tooltip.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-chat"></em>
                            </span>
                            <span class="nk-menu-text">Popover &amp; Tooltips</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-accordion.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-view-x7"></em>
                            </span>
                            <span class="nk-menu-text">Accordion</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-card.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-card-view"></em>
                            </span>
                            <span class="nk-menu-text">Card</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-offcanvas.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-layout-alt"></em>
                            </span>
                            <span class="nk-menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="component-toasts.html" class="nk-menu-link">
                            <span class="nk-menu-icon is-alt">
                                <em class="icon ni ni-block-over"></em>
                            </span>
                            <span class="nk-menu-text">Toasts</span>
                        </a>
                    </li> --}}
                </ul>
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-footer">
        <div class="nk-sidebar-footer-extended pt-3">
            <div class="border border-light rounded-3">
                {{-- <div class="px-3 py-2 bg-white border-bottom border-light rounded-top-3">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <h6 class="lead-text">Free Plan</h6>
                        <a class="link link-primary" href="pricing-plans.html">
                            <em class="ni ni-spark-fill icon text-warning"></em>
                            <span>Upgrade</span>
                        </a>
                    </div>
                    <div class="progress progress-md">
                        <div class="progress-bar" data-progress="25%"></div>
                    </div>
                    <h6 class="lead-text mt-2">1,360 <span class="text-light">words left</span></h6>
                </div> --}}
                <a class="d-flex px-3 py-2 bg-primary bg-opacity-10 rounded-bottom-3" href="{{url('dashboard')}}">
                    <div class="media-group">
                        <div class="media media-sm media-middle media-circle text-bg-primary">
                            <em class="off icon ni ni-user"></em>
                        </div>
                        <div class="media-text">
                            <h6 class="fs-6 mb-0">{{ auth()->user()->name }}</h6>
                            <span class="text-light fs-7">{{ auth()->user()->email }}</span>
                        </div>
                        <em class="icon ni ni-chevron-right ms-auto ps-1"></em>
                    </div>
                </a>
            </div>
        </div>
    </div><!-- .nk-sidebar-element -->
</div><!-- .nk-sidebar -->
