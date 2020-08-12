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
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('aboutpage');

Route::get('/about/mbstu', function () {
    return view('mbstu');
})->name('mbstupage');



Route::get('/game', function () {
    return view('game');
})->name('gamepage');


Route::get('/game/{num1}', function ($num1) {
    
    return $num1;

})->where(['num1'=>'[0-9][0-2]']);


Route::get('/game/sum/{num1}/{num2}', function ($num1,$num2) {
    
    return $num1+$num2;

})->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);


Route::get('/game/mul/{num1}/{num2}', function ($num1,$num2) {
    
    return $num1*$num2;

})->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);


Route::get('/game/sub/{num1}/{num2}', 'substraction@sub')->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);

