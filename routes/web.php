<?php

use App\Http\Controllers\ProfileController;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistics;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\ProjectClient;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can: manage statistics')->group((function () {
            Route::resource('statistics', CompanyStatistics::class);
        }));

        Route::middleware('can: manage products')->group((function () {
            Route::resource('products', Product::class);
        }));

        Route::middleware('can: manage principles')->group((function () {
            Route::resource('principles', OurPrinciple::class);
        }));

        Route::middleware('can: manage testimonials')->group((function () {
            Route::resource('testimonials', OurPrinciple::class);
        }));

        Route::middleware('can: manage clients')->group((function () {
            Route::resource('clients', ProjectClient::class);
        }));

        Route::middleware('can: manage teams')->group((function () {
            Route::resource('teams', OurTeam::class);
        }));

        Route::middleware('can: manage abouts')->group((function () {
            Route::resource('abouts', CompanyAbout::class);
        }));

        Route::middleware('can: manage appointments')->group((function () {
            Route::resource('appointments', CompanyAbout::class);
        }));

        Route::middleware('can: manage hero sections')->group((function () {
            Route::resource('hero_sections', HeroSection::class);
        }));
    });
});

require __DIR__ . '/auth.php';
