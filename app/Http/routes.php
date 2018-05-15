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

Route::get('/', function () {
    return view('index');
});

Route::get('/Speeches/chanchellor.blade.php', function () {
    return view('Speeches.chanchellor');
});

Route::get('/Speeches/vicechanchellor.blade.php', function () {
    return view('Speeches.vicechanchellor');
});

Route::get('/Speeches/proctor.blade.php', function () {
    return view('Speeches.proctor');
});

Route::get('/Speeches/chairman.blade.php', function () {
    return view('Speeches.chairman');
});