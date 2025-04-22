<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\PostRead;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);
        //after login is successful
        $cookieId = request()->cookie('visitor_token') ?? (string) Str::uuid();
        $deviceHash = sha1(request()->ip() . '|' . substr(request()->userAgent(), 0, 100) . '|' . $cookieId);
        $cacheKey = "story_views_{$deviceHash}";
    
        // Retrieve the cached data of views
        $views = Cache::get($cacheKey, [
            'reset_at' => now()->addDays(30),
            'stories_read' => []
        ]);


        if (count($views['stories_read']) > 0) {
            
                foreach($views['stories_read'] as $view){

                    PostRead::create(['user_id' => auth()->user()->id, 'post_id' => $view['id'],  'hash' => $cacheKey]);
                }

                Cache::forget($cacheKey);
                session()->forget('stories_read');
                Cookie::queue(Cookie::forget('visitor_token'));
        }


        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
