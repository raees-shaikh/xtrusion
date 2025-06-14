<?php

use Illuminate\Support\Facades\Route;


Route::domain(config('app.cms_domain'))->group(function () {


    require __DIR__ . '/auth.php';

    Route::get("/login", 'App\Http\Controllers\cms\LoginController@loginShow')->name('login');
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('cms.login.submit');

    Route::get('/forgot-password', 'App\Http\Controllers\cms\ForgotPasswordController@index')->name('cms.forgotPassword.index');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/change-password', 'App\Http\Controllers\cms\ChangePasswordController@changePassword')->name('cms.changePassword.index');
        Route::post('/change-password/{id}', 'App\Http\Controllers\cms\ChangePasswordController@passwordChange')->name('cms.password.submit');

        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("cms.logout");

        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name("cms.statistics.index");

        // Categories Controller
        Route::get('/categories', 'App\Http\Controllers\cms\CategoriesController@index')->name('cms.categories.index');
        Route::get('/category/show/{id}', 'App\Http\Controllers\cms\CategoriesController@show')->name('cms.categories.show');
        Route::get('/category/create', 'App\Http\Controllers\cms\CategoriesController@create')->name("cms.categories.create");
        Route::post('/category/store', 'App\Http\Controllers\cms\CategoriesController@store')->name("cms.categories.store");
        Route::get('/category/delete/{id}', 'App\Http\Controllers\cms\CategoriesController@delete')->name("cms.categories.delete");
        Route::get('/category/edit/{id}', 'App\Http\Controllers\cms\CategoriesController@edit')->name("cms.categories.edit");
        Route::post('/category/update/{id}', 'App\Http\Controllers\cms\CategoriesController@update')->name("cms.categories.update");

        // Offer Controllers
        Route::get('/offers', 'App\Http\Controllers\cms\OfferController@index')->name('cms.offer.index');
        Route::get('/offer/show/{id}', 'App\Http\Controllers\cms\OfferController@show')->name('cms.offer.show');
        Route::get('/offer/create', 'App\Http\Controllers\cms\OfferController@create')->name('cms.offer.create');
        Route::post('/offer/store', 'App\Http\Controllers\cms\OfferController@store')->name("cms.offer.store");
        Route::get('/offer/edit/{id}', 'App\Http\Controllers\cms\OfferController@edit')->name('cms.offer.edit');
        Route::post('/offer/update/{id}', 'App\Http\Controllers\cms\OfferController@update')->name("cms.offer.update");
        Route::get('/offer/delete/{id}', 'App\Http\Controllers\cms\OfferController@delete')->name('cms.offer.delete');

        Route::get('/exhibitions/media/{id}', 'App\Http\Controllers\cms\ExhibitionController@indexMedia')->name('cms.exhibition.media.index');
        Route::get('/exhibition/media/create/{id}', 'App\Http\Controllers\cms\ExhibitionController@createMedia')->name('cms.exhibition.media.create');
        Route::post('/exhibition/media/store/{id}', 'App\Http\Controllers\cms\ExhibitionController@storeMedia')->name('cms.exhibition.media.store');
        Route::get('/exhibitions/media/edit/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@editMedia')->name('cms.exhibition.media.edit');
        Route::post('/exhibition/media/update/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@updateMedia')->name('cms.exhibition.media.update');
        Route::get('/exhibition/media/delete/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@deleteMedia')->name('cms.exhibition.media.delete');

        Route::get('/exhibitions', 'App\Http\Controllers\cms\ExhibitionController@index')->name('cms.exhibition.index');
        Route::get('/exhibition/show/{id}', 'App\Http\Controllers\cms\ExhibitionController@show')->name('cms.exhibition.show');
        Route::get('/exhibition/create', 'App\Http\Controllers\cms\ExhibitionController@create')->name('cms.exhibition.create');
        Route::post('/exhibition/store', 'App\Http\Controllers\cms\ExhibitionController@store')->name('cms.exhibition.store');
        Route::get('/exhibition/edit/{id}', 'App\Http\Controllers\cms\ExhibitionController@edit')->name('cms.exhibition.edit');
        Route::post('/exhibition/update/{id}', 'App\Http\Controllers\cms\ExhibitionController@update')->name('cms.exhibition.update');
        Route::get('/exhibition/delete/{id}', 'App\Http\Controllers\cms\ExhibitionController@delete')->name('cms.exhibition.delete');

        Route::get('/data', 'App\Http\Controllers\cms\DataController@index')->name('cms.data.index');
        Route::get('/data/create', 'App\Http\Controllers\cms\DataController@create')->name('cms.data.create');
        Route::post('/data/store', 'App\Http\Controllers\cms\DataController@store')->name('cms.data.store');
        Route::get('/data/edit/{id}', 'App\Http\Controllers\cms\DataController@edit')->name('cms.data.edit');
        Route::post('/data/update/{id}', 'App\Http\Controllers\cms\DataController@update')->name('cms.data.update');
        Route::get('/data/delete/{id}', 'App\Http\Controllers\cms\DataController@delete')->name('cms.data.delete');
    });
});
