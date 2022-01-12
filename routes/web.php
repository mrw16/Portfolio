<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});

Route::get('/home', function() {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('home.index');

Route::get('/user', function() {
    return 'Halaman untuk User';
})->middleware('role:user')->name('user.index');