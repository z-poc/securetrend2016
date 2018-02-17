<?php

use Illuminate\Support\Facades\Input;
use App\Subscriber;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{lang?}', function ($lang=null) {
    App::setLocale($lang);
    return view('index');
});

Auth::routes();

Route::post('/subscribe','SubscriberController@store');

Route::post('/message_us','MessageController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
