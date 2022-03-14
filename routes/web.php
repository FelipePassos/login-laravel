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

Route::get('/', 'LoginController@printView');
Route::post('/dados', 'LoginController@store');
<<<<<<< HEAD
Route::get('/visualizar', 'LoginController@index');
=======
Route::get('/visualizar', 'LerDados@index');
>>>>>>> ecbfe525ff2f07f767256973df5318692474c7f6
