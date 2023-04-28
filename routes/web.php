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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'LandingPage\HomeController@beranda')->name('beranda');
Route::get('/perusahaan','LandingPage\HomeController@perusahaan')->name('perusahaan');
Route::get('/layanan','LandingPage\HomeController@layanan')->name('layanan');
Route::get('/proyek','LandingPage\HomeController@proyek')->name('proyek');
Route::get('/blog','LandingPage\HomeController@blog')->name('blog');
Route::get('/kontak','LandingPage\HomeController@kontak')->name('kontak');
Route::post('/kontak-kami','LandingPage\HomeController@kontak_kami')->name('kontak-kami');

Auth::routes(['register' => false, 'login' => false]);

Route::get('/login','Auth\RazenHoliday\LoginController@showLoginForm')->name('razen-holiday.login');
Route::post('/login', 'Auth\RazenHoliday\LoginController@login')->name('razen-holiday.login.submit');
Route::get('/logout', 'Auth\RazenHoliday\LoginController@logout')->name('razen-holiday.logout');

Route::group(['middleware' => 'auth:razen_holiday'], function(){
    @include('razen-holiday.php');
});
