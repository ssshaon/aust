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

Route::get('/Speeches/speeches.blade.php', function () {
    return view('Speeches.speeches');
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

Route::get('/Speeches/din.blade.php', function () {
    return view('Speeches.din');
});

Route::get('/academicinformations.blade.php', function () {
    return view('academicinformations');
});

Route::get('/officialinformations.blade.php', function () {
    return view('officialinformations');
});

Route::get('/components_sliders.blade.php', function () {
    return view('components_sliders');
});

Route::get('/Departments/departments.blade.php', function () {
    return view('Departments.departments');
});

Route::get('/Departments/cse.blade.php', function () {
    return view('Departments.cse');
});

Route::get('/Departments/eee.blade.php', function () {
    return view('Departments.eee');
});

Route::get('/Departments/textile.blade.php', function () {
    return view('Departments.textile');
});

Route::get('/Departments/civil.blade.php', function () {
    return view('Departments.civil');
});

Route::get('/Departments/mpe.blade.php', function () {
    return view('Departments.mpe');
});

Route::get('/Departments/masters.blade.php', function () {
    return view('Departments.masters');
});

Route::get('/Departments/bba.blade.php', function () {
    return view('Departments.bba');
});

