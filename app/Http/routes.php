<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('', function () {
    return view('welcome', ['suggestedRatablesList' => 'Chicago Bears - My Rating: 1 2 3 4 5', 'alreadyRatedList' => 'Green Bay Packers - My Rating: 5 stars']);
});

//Route::resource('ratables', 'RatableController');
