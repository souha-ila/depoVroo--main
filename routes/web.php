<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/contact', 'App\Http\Controllers\ContactController@contact')->name("autres.contact");
Route::get('/home/about', 'App\Http\Controllers\ContactController@about')->name("autres.about");
Route::get('/home/services', 'App\Http\Controllers\ContactController@services')->name("autres.services");
Route::get('/products', 'App\Http\Controllers\CarController@index')->name("car.index");
Route::get('/', 'App\Http\Controllers\CarController@homecar')->name("welcome");
Route::get('/car/{id}', 'App\Http\Controllers\CarController@show')->name("car.show");
Route::middleware('auth')->post('/reservations', 'App\Http\Controllers\ReservationController@store')->name('reservations.store');



Route::middleware('admin')->group(function(){
Route::get('/admin/cars', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.index");
Route::get('/admin/cars/all', 'App\Http\Controllers\Admin\AdminCarController@index')->name("admin.car.index");
Route::post('/admin/cars/store', 'App\Http\Controllers\Admin\AdminCarController@store')->name("admin.car.store");
Route::delete('/admin/cars/{id}/delete', 'App\Http\Controllers\Admin\AdminCarController@delete')->name("admin.car.delete");
Route::get('/admin/cars/{id}/edit', 'App\Http\Controllers\Admin\AdminCarController@edit')->name("admin.car.edit");
Route::put('/admin/cars/{id}/update', 'App\Http\Controllers\Admin\AdminCarController@update')->name("admin.car.update");
Route::get('/admin/page', 'App\Http\Controllers\Admin\AdminHomeController@index1')->name("layouts.admin");
Route::get('/admin/users/all', 'App\Http\Controllers\Admin\AdminUserController@index')->name("admin.users.user");
Route::delete('/admin/user/{id}/delete', 'App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");

Route::get('/admin/reservation/all', 'App\Http\Controllers\ReservationController@index')->name("admin.reservation.reservation");
Route::delete('/admin/reservation/{id}/delete', 'App\Http\Controllers\ReservationController@delete')->name("admin.reservation.delete");


});



Auth::routes();


