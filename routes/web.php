<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('index');
})->name('index');
Route::get('dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('job-vacancy', function () {
    return view('job-vacancy.index');
})->name('job-vacancy');
Route::get('detail-job-vacancy', function () {
    return view('job-vacancy.detail');
})->name('detail-job-vacancy');
Route::get('/verify-account', function (){
    return view('auth.verify');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

