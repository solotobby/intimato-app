<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PostController;
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\Subscription;
use App\Livewire\Admin\Tag;
use App\Livewire\Admin\UserList;
use App\Livewire\Dashboard;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Stories\CreateStory;
use App\Livewire\Stories\MyStories;
use App\Livewire\Stories\StoryDetail;
use App\Livewire\Subscriptions\Showplans;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingPageController::class, 'landingPage']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/terms', [LandingPageController::class, 'terms']);
Route::get('/privacy', [LandingPageController::class, 'privacy']);
Route::get('/categories', [LandingPageController::class, 'categories']);
Route::get('/submit', [LandingPageController::class, 'submitStory'])->name('submit');
Route::post('/submit/story', [LandingPageController::class, 'storeStory'])->name('submit.story');
Route::get('/story/{_id}', [LandingPageController::class, 'viewStory']);
Route::get('/subscribe', [LandingPageController::class, 'subscribe'])->name('subscribe');
Route::get('/feedback', [LandingPageController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [LandingPageController::class, 'storeFeedback'])->name('feedback.store');



Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('dashboard', Dashboard::class)->name('dashboard');
    // Route::get('create/story', CreateStory::class)->name('create.story');
    Route::get('view/story/{id}', StoryDetail::class);
    Route::get('show/plans', Showplans::class)->name('show.plans');
    Route::get('my/stories', MyStories::class)->name('my.stories');

    //paypal subscription routes
    Route::get('cancel/process', [PayPalController::class, 'cancelProcess'])->name('cancel.process');
    Route::get('validate/subscription', [PayPalController::class, 'validateSubscription'])->name('validate.payment');

    Route::get('create/post', [PostController::class, 'createPost'])->name('create.story');
    Route::post('store/post', [PostController::class, 'storePost'])->name('store.post');

    // Admin Routes
    Route::get('admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('subscription/list', Subscription::class)->name('admin.subscription');
    Route::get('admin/tags', Tag::class)->name('admin.tags');
    Route::get('users/list', UserList::class)->name('users.list');

    Route::get('generate/paypal/product', [AdminController::class, 'createPaypalProduct'])->name('generate.paypal.product');
    Route::get('generate/paypal/{plan}/{id}', [AdminController::class, 'GeneratePaypalId']);

});



require __DIR__.'/auth.php';
