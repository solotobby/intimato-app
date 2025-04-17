<?php

use App\Http\Controllers\LandingPageController;
use App\Livewire\Dashboard;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Stories\CreateStory;
use App\Livewire\Stories\StoryDetail;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingPageController::class, 'landingPage']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/terms', [LandingPageController::class, 'terms']);
Route::get('/categories', [LandingPageController::class, 'categories']);
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('create/story', CreateStory::class)->name('create.story');
    Route::get('story/{id}', StoryDetail::class);
});



require __DIR__.'/auth.php';
