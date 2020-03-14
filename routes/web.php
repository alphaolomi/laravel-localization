<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
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
    Auth::routes();
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('posts', 'Admin\PostController', ["as" => 'admin']);
        Route::resource('courses', 'Admin\CourseController', ["as" => 'admin']);
    });
    if (App::environment('testing') || App::environment('local')) {
        Route::get('/_testing/login', function () {
            Auth::login(factory(\App\User::class)->create());
        });
        Route::get('/_testing/create', function () {
            $modelClass = 'App\\' . request('model');
            return factory($modelClass)->create();
        });
    }
});
