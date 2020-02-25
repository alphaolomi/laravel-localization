<?php



Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::get('/', function () {
        return view('index');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    // Route::get('test', function () {
    //     return View::make('test');
    // });
});





// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],
//     function () { //...
//     }
// );
