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










Route::get('/verify-account', function (){
    return view('auth.verify');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







// Admin 
Route::get('dashboard', function () {return view('admin.index');})->name('dashboard');
Route::get('job-vacancy', function () {return view('admin.job-vacancy.index');})->name('job.vacancy');
Route::get('account-siswa', function () {return view('admin.account-siswa');})->name('account.siswa');
Route::get('alumni-register', function () {return view('admin.alumni-register');})->name('alumni.register');
Route::get('add-school-year', function () {return view('admin.add-school-year');})->name('add.school.year');
Route::get('add-major', function () {return view('admin.add-major');})->name('add.major');
Route::get('add-class', function () {return view('admin.add-class');})->name('add.class');
Route::get('teacher-gallery', function (){return view('admin.teacher-gallery');})->name('teacher.gallery');
Route::get('upload-news', function (){return view('admin.upload-news');})->name('upload.news');
Route::get('verify-company', function () {return view('admin.verify-company');})->name('verify.company');
Route::get('alumni-gallery', function (){return view('admin.alumni-gallery');})->name('alumni.gallery');
Route::get('detail-job-vacancy', function () {return view('admin.job-vacancy.detail');})->name('detail.job.vacancy');

// company 
Route::get('company', function (){return view('company.index');});
Route::get('job-applicant', function (){return view('company.job-applicant');});
Route::get('vacancy', function (){return view('company.vacancy');});
Route::get('profile-company', function (){return view('company.profile');});
Route::prefix('alumni')->name('alumni.')->group(function(){
    Route::get('/',function(){return view('alumni.index');})->name('index');
    Route::get('survei-pekerjaan',function(){return view('alumni.job-survey');})->name('job.survey');
});