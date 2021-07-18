<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    // Authentification Route
    Auth::routes();

    // Pages routes
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/about', function () {
        return view('pages.about');
    });
    Route::get('/contact', function () {
        return view('pages.contact');
    });
    Route::get('/courses', function () {
        return view('courses.index');
    });

    // Admin routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', '\App\Http\Controllers\Admin\PostController', ["as" => 'admin']);
        Route::resource('courses', '\App\Http\Controllers\Admin\CourseController', ["as" => 'admin']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
