<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::domain(config('app.web_domain'))->group(function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', 'App\Http\Controllers\frontend\HomeController@index')->name('frontend.index');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Route::get('/', function () {
    //     return view('frontend.index');
    // });

    Route::get('company-profile', function () {
        return view('frontend.company-profile');
    });

    // Route::get('latest-proposals', function () {
    //     return view('frontend.offers.index');
    // });

    Route::get('contact', function () {
        return view('frontend.contact');
    });

    Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');

    // Route::get('offer', function () {
    //     return view('frontend.offers.single-offer');
    // });

    // Route::get('show', function () {
    //     return view('frontend.offers.show');
    // });


    // Route::get('exhibitions', function () {
    //     return view('frontend.exhibitions.index');
    // });
    // Route::get('exhibition', function () {
    //     return view('frontend.exhibitions.show');
    // });

    Route::get('business-process', function () {
        return view('frontend.business-process');
    });

    Route::get('sitemap', function () {
        return view('frontend.sitemap');
    });

    Route::get('/latest-offers', 'App\Http\Controllers\frontend\OfferController@index')->name('latest-offers');
    Route::get('/latest-offer/{category}', 'App\Http\Controllers\frontend\OfferController@offerIndex')->name('offer-index');
    Route::get('/latest-offer/{category}/{offer}', 'App\Http\Controllers\frontend\OfferController@offerShow')->name('offer-show');

    Route::get('/exhibitions', 'App\Http\Controllers\frontend\ExhibitionController@index')->name('frontend.exhibitions.index');
    Route::get('/exhibition/{exhibitionSlug}', 'App\Http\Controllers\frontend\ExhibitionController@show')->name('frontend.exhibitions.show');
});
