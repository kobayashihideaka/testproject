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

//追記部分
//Route::get('/hello', function () {
//    return 'hello';
//});

//start php artisan serve コントローラー呼び出し http://127.0.0.1:8000/hello 
Route::get('/hello', 'App\Http\Controllers\HelloController@index');

