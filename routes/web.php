<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Age;
use App\Http\Controllers\Barangay;
use App\Http\Controllers\Gender;
use App\Http\Controllers\Status;
use App\Http\Controllers\Citizenship;
use App\Http\Controllers\PS;

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
    return redirect('/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminhome')->middleware('is_admin');

Route::resource('dashboards', DashboardController::class);
Route::resource('users', UserController::class);
Route::resource('residents', ResidentController::class);
Route::resource('ages', age::class);
Route::resource('barangays', Barangay::class);
Route::resource('genders', Gender::class);
Route::resource('status', Status::class);
Route::resource('citizenship', Citizenship::class);
Route::resource('ps', PS::class);

Route::get('google-chart', [PostController::class, 'googleChart']);

