{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute right-0 top-0 text-sm" :href="  " wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div> --}}

<div>
                              
                                <div class="nk-block-head text-center mb-4 pb-2">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title mb-1">Log into Your Account</h3>
                                        {{-- <p class="small">Sign in to your account to customize your content generation settings and view your history.</p> --}}
                                    </div>
                                </div>

                                <form wire:submit="login">
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email Address</label>
                                                <div class="form-control-wrap">
                                                    <input class="form-control" type="email" id="email"  wire:model="email" placeholder="Enter email address" />
                                                </div>
                                            </div><!-- .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <div class="form-control-wrap">
                                                    <a href="password" class="password-toggle form-control-icon end" title="Toggle show/hide password">
                                                        <em class="icon ni ni-eye inactive"></em>
                                                        <em class="icon ni ni-eye-off active"></em>
                                                    </a>
                                                    <input class="form-control" type="password"  wire:model="password" id="password" placeholder="Enter password" />
                                                </div>
                                            </div><!-- .form-group -->
                                        </div>
                                        {{-- @if (Route::has('password.request'))
                                            <div class="col-12">
                                                <a class="link small" href="{{route('password.request')}}">Forgot password?</a>
                                            </div>
                                        @endif --}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <p class="small">Don’t have an account? <a href="{{route('register')}}">Sign up</a></p>
                                </div>
                                <div class="my-3 text-center">
                                    <h6 class="overline-title overline-title-sep"><span>OR</span></h6>
                                </div>
                                <div class="row g-2">
                                    <div class="col-12">
                                        <a href="{{ route('auth.google') }}" class="btn btn-outline-light w-100">
                                            <img src="images//icons/google.png" alt="" class="icon" />
                                            <span class="fw-medium">Continue with Google</span>
                                        </a>
                                    </div>
                                    {{-- <div class="col-12">
                                        <button href="#" class="btn btn-outline-light w-100">
                                            <img src="images//icons/facebook.png" alt="" class="icon" />
                                            <span class="fw-medium">Continue with Facebook</span>
                                        </button>
                                    </div> --}}
                                </div>

</div>
