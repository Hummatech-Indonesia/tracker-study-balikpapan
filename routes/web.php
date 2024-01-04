<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GalleryAlumniController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TeacherGalleryController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\SliderGalleryAlumniController;
use App\Http\Controllers\TeacherVideoGalleryController;
use App\Models\SliderGalleryAlumni;

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
Route::get('galery-alumni', function () {
    return view('galery-alumni');
});
Route::get('landing-page-news', [LandingPageController::class, 'news'])->name('landing-page-news');
Route::get('detail-news/{news}', [LandingPageController::class, 'detailNews'])->name('detail-news');

Route::get('gallery-teacher', [TeacherGalleryController::class, 'galery'])->name('gallery-teacher');

Route::post('teacher-video-gallery', [TeacherVideoGalleryController::class, 'store'])->name('teacher-video-gallery.store');

Route::resources([
    'school-years' => SchoolYearController::class,
    'majors' => MajorController::class,
    'classrooms' => ClassroomController::class,
    'news' => NewsController::class,
]);
Route::get('teacher-gallery', [TeacherGalleryController::class, 'index'])->name('teacher-gallery.index');
Route::post('teacher-gallery/store', [TeacherGalleryController::class, 'store'])->name('teacher-gallery.store');
Route::put('teacher-gallery/{teacherGallery}', [TeacherGalleryController::class, 'update']);
Route::delete('teacher-gallery/{teacherGallery}', [TeacherGalleryController::class, 'destroy']);

Route::put('school-years/{schoolYear}', [SchoolYearController::class, 'update']);

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::put('students/{user}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{user}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/verify-account', function () {
    return view('auth.verify');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('register-company', [RegisterController::class, 'registerCompanyView']);
Route::post('register-company', [RegisterController::class, 'registerCompany'])->name('register.company');

Route::patch('verify-account/{user}', [VerificationController::class, 'verify'])->name('verification.account');

// Admin
Route::get('dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::get('alumni-gallery', [GalleryAlumniController::class, 'index'])->name('alumni.gallery');
Route::post('alumni-gallery', [GalleryAlumniController::class, 'store'])->name('alumni.store');
Route::post('slider-gallery-alumni', [SliderGalleryAlumniController::class, 'store'])->name('slider.gallery.alumni');
Route::delete('alumni-gallery-delete/{gallery_alumni}', [GalleryAlumniController::class, 'destroy'])->name('alumni.delete');
Route::put('alumni-gallery-update/{gallery_alumni}', [GalleryAlumniController::class, 'update'])->name('alumni.update');
Route::resource('survey', SurveyController::class);
Route::get('job-vacancy', function () {
    return view('admin.job-vacancy.index');
})->name('job.vacancy');
Route::get('account-siswa', function () {
    return view('admin.account-siswa');
})->name('account.siswa');
Route::get('alumni-register', function () {
    return view('admin.alumni-register');
})->name('alumni.register');
Route::get('add-major', function () {
    return view('admin.add-major');
})->name('add.major');
Route::get('add-class', function () {
    return view('admin.add-class');
})->name('add.class');
Route::get('verify-company', function () {
    return view('admin.verify-company');
})->name('verify.company');
Route::get('detail-job-vacancy', function () {
    return view('admin.job-vacancy.detail');
})->name('detail.job.vacancy');
// siswa
Route::get('dashboard-student', function () {
    return view('student.dashboard');
})->name('dashboard-student');
Route::get('portofolio', function () {
    return view('student.portofolio');
})->name('portofolio');

// company
Route::get('company', function () {
    return view('company.index');
})->name('company-dashboard');
Route::get('job-applicant', function () {
    return view('company.job-applicant');
});
Route::get('vacancy', function () {
    return view('company.vacancy');
});
Route::get('profile-company', function () {
    return view('company.profile');
});

Route::prefix('alumni')->name('alumni.')->group(function () {
    Route::get('dashboard-alumni', function () {
        return view('alumni.index');
    })->name('dashboard-alumni');
    Route::get('survei-pekerjaan', function () {
        return view('alumni.job-survey');
    })->name('job.survey');
});
