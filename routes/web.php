<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

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
    // Route::get('/courses', function () {
    //     return view('courses.index');
    // });
});

