<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/question1/{number?}', 'Question1Controller@solution');

Route::get('/question2/{array?}', 'Question2Controller@solution');

Route::get('/question3/{array?}', 'Question3Controller@solution');

Route::get('/question4/{string?}', 'Question4Controller@solution');

Route::get('/question5/{array?}', 'Question5Controller@solution');

Route::get('/question6', 'Question6Controller@solution');
