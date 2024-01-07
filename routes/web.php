<?php

use App\Models\SliderGalleryAlumni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GalleryAlumniController;
use App\Http\Controllers\TeacherGalleryController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AlumniVideoGalleryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderGalleryAlumniController;
use App\Http\Controllers\TeacherVideoGalleryController;

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

//Landing Page
Route::get('/',[HomeController::class,'index'])->name('landing-page');

Route::get('berita', [LandingPageController::class, 'news'])->name('landing-page-news');
Route::get('berita/{news}', [LandingPageController::class, 'detailNews'])->name('detail-news');

Route::get('galeri-guru', [TeacherGalleryController::class, 'galery'])->name('gallery-teacher');
Route::get('galeri-alumni', [LandingPageController::class, 'alumni'])->name('galery-alumni');
Route::post('vidio-galeri-guru', [TeacherVideoGalleryController::class, 'store'])->name('teacher-video-gallery.store');

//Auth
Auth::routes();

Route::get('verify-account', function () {
    return view('auth.verify');
});

Route::middleware('auth')->group(function(){
    
    Route::get('dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    
    Route::middleware('role:admin')->group(function(){

        Route::resources([
            'school-years' => SchoolYearController::class,
            'majors' => MajorController::class,
            'classrooms' => ClassroomController::class,
            'news' => NewsController::class,
            'survey' => SurveyController::class
        ]);

        Route::get('students', [StudentController::class, 'index'])->name('students.index');
        Route::post('students', [StudentController::class, 'store'])->name('students.store');
        Route::put('students/{user}', [StudentController::class, 'update'])->name('students.update');
        Route::delete('students/{user}', [StudentController::class, 'destroy'])->name('students.destroy');
        Route::get('teacher-gallery', [TeacherGalleryController::class, 'index'])->name('teacher-gallery.index');
        Route::post('teacher-gallery/store', [TeacherGalleryController::class, 'store'])->name('teacher-gallery.store');
        Route::put('teacher-gallery/{teacherGallery}', [TeacherGalleryController::class, 'update']);
        Route::delete('teacher-gallery/{teacherGallery}', [TeacherGalleryController::class, 'destroy']);

        Route::post('video-alumni', [AlumniVideoGalleryController::class, 'store'])->name('video.alumni');
        Route::get('alumni-gallery', [GalleryAlumniController::class, 'index'])->name('alumni.gallery');
        Route::post('alumni-gallery', [GalleryAlumniController::class, 'store'])->name('alumni.store');
        Route::post('slider-gallery-alumni', [SliderGalleryAlumniController::class, 'store'])->name('slider.gallery.alumni');
        Route::delete('slider-gallery-delete/{slider_gallery_alumni}', [SliderGalleryAlumniController::class, 'destroy'])->name('slider.gallery.delete');
        Route::delete('alumni-gallery-delete/{gallery_alumni}', [GalleryAlumniController::class, 'destroy'])->name('alumni.delete');
        Route::put('alumni-gallery-update/{gallery_alumni}', [GalleryAlumniController::class, 'update'])->name('alumni.update');

    });
    Route::middleware('role:student')->group(function(){

    });
    Route::middleware('role:alumni')->group(function(){

    });
    Route::middleware('role:company')->group(function(){

    });
    Route::middleware('role:student|alumni')->group(function(){

    });
});

Route::resources([
    'job-vacancy' => JobVacancyController::class,
]);

Route::get('pilih-role', function () {
    return view('auth.choice-of-roles');
});

Route::get('register-company', [RegisterController::class, 'registerCompanyView']);
Route::post('register-company', [RegisterController::class, 'registerCompany'])->name('register.company');

Route::get('verify-account/{user}', [VerificationController::class, 'verify'])->name('verification.account');



Route::get('account-siswa', [StudentController::class, 'viewVerificationStudent'])->name('account.siswa');

Route::patch('verification-student/{student}', [StudentController::class, 'verificationStudent'])->name('verification.student');
Route::patch('reject-verification-student/{student}', [StudentController::class, 'rejectVerificationStudent'])->name('reject.verification.student');
Route::get('alumni-register', function () {
    return view('admin.alumni-register');
})->name('alumni.register');

Route::get('verify-company', [CompanyController::class, 'index'])->name('verify.company');
Route::patch('approve-verify-company/{company}', [CompanyController::class, 'approve'])->name('approve.verify.company');
Route::patch('reject-verify-company/{company}', [CompanyController::class, 'reject'])->name('reject.verify.company');

Route::get('detail-job-vacancy', function () {
    return view('admin.job-vacancy.detail');
})->name('detail.job.vacancy');
// siswa

Route::get('portofolio', function () {
    return view('student.portofolio');
})->name('portofolio');
Route::get('add-portofolio', function () {
    return view('student.add-portofolio');
})->name('add.portofolio');
Route::get('detail-portofolio', function () {
    return view('student.detail-portofolio');
})->name('detail.portofolio');
Route::get('edit-portofolio', function () {
    return view('student.edit-portofolio');
})->name('edit.portofolio');

Route::get('job-applicant', function () {
    return view('company.job-applicant');
});
Route::get('profile-company', [UserController::class, 'company'])->name('profile-company');
Route::put('update-company-profile/{user}', [UserController::class, 'updateCompany'])->name('update-company-profile');
Route::patch('update-profile', [UserController::class, 'updateProfile'])->name('update-profile');
Route::patch('update-password', [UserController::class, 'updatePassword'])->name('update-password');


Route::prefix('alumni')->name('alumni.')->group(function () {
    Route::get('survei-pekerjaan', function () {
        return view('alumni.job-survey');
    })->name('job.survey');
    Route::get('detail-lowongan-tersedia', function () {
        return view('alumni.detail');
    })->name('detail.lowongan.tersedia');
    Route::get('lowongan-tersedia', [JobVacancyController::class, 'jobvacancy'])->name('vacancies.available');
    Route::get('lowongan', function () {
        return view('alumni.job-vacancy-page');
    })->name('job.vacancy.page');
});
