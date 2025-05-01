{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div> --}}

<div>

    <div class="nk-block-head text-center mb-4 pb-2">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title mb-1">Create Your Account</h3>
            <p class="small">Email verification is required for signup to ensure security, and your email will only be used for identity verification.</p>
        </div>
    </div>
    <form wire:submit="register">
        <div class="row gy-3">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="fullname">Full Name</label>
                    <div class="form-control-wrap">
                        <input class="form-control" type="text" wire:model="name" id="fullname" placeholder="Enter your name" />
                    </div>
                </div><!-- .form-group -->
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <div class="form-control-wrap">
                        <input class="form-control" type="email" wire:model="email" id="email" placeholder="Enter email address" />
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
                        <input class="form-control" type="password" wire:model="password" id="password" placeholder="Enter password" />
                    </div>
                </div><!-- .form-group -->
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="password-confirmation">Confirm Password</label>
                    <div class="form-control-wrap">
                        <a href="password-confirmation" class="password-toggle form-control-icon end" title="Toggle show/hide password">
                            <em class="icon ni ni-eye inactive"></em>
                            <em class="icon ni ni-eye-off active"></em>
                        </a>
                        <input class="form-control" type="password" wire:model="password_confirmation" id="password-confirmation" placeholder="Enter password confirmation" />
                    </div>
                </div><!-- .form-group -->
            </div>
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Create Account</button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center mt-3">
        <p class="small">Already have an account? <a href="{{ route('login') }}">Login</a></p>
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
