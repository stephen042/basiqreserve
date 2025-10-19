<?php

use App\Livewire\Auth\Login;
use Laravel\Fortify\Features;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;

Route::get('/',  Login::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('transfers', 'transfers')->name('transfers');
    Route::view('add_funds', 'add_funds')->name('add_funds');
    Route::view('history', 'history')->name('history');
    Route::view('details_settings', 'details_settings')->name('details_settings');
    Route::view('details_settings', 'details_settings')->name('details_settings');
});

Route::middleware(['auth'])->group(function () {

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';
