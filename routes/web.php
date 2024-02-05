<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GalleryAlumniController;
use App\Http\Controllers\StudentStatusController;
use App\Http\Controllers\TeacherGalleryController;
use App\Http\Controllers\ApplyJobVacancyController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AlumniVideoGalleryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\SliderGalleryAlumniController;
use App\Http\Controllers\TeacherVideoGalleryController;
use Illuminate\Support\Facades\View;

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
Route::get('/', [HomeController::class, 'index'])->name('landing-page');

Route::get('lowongan', [LandingPageController::class, 'jobVacancy'])->name('lowongan');

Route::get('detail-lowongan/{jobVacancy}', [LandingPageController::class, 'detailJobVacancy'])->name('detail-lowongan');

Route::get('berita', [LandingPageController::class, 'news'])->name('landing-page-news');
Route::get('berita/{news}', [LandingPageController::class, 'detailNews'])->name('detail-news');

Route::get('galeri-guru', [TeacherGalleryController::class, 'galery'])->name('gallery-teacher');
Route::get('galeri-alumni', [LandingPageController::class, 'alumni'])->name('galery-alumni');
Route::post('vidio-galeri-guru', [TeacherVideoGalleryController::class, 'store'])->name('teacher-video-gallery.store');

Route::get('forgot-password', [ResetPasswordController::class, 'index']);
Route::get('reset-password/{user}', [ResetPasswordController::class, 'viewResetPassword'])->name('reset.password');
Route::post('send-email-forgot-password', [ResetPasswordController::class, 'sendEmailForgotPassword'])->name('send.email.forgot.password');
Route::post('reset-password-user/{user}', [ResetPasswordController::class, 'resetPassword'])->name('reset.password.user');


//Auth
Auth::routes();

Route::get('verify-account', function () {
    return view('auth.verify');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('register-company', [RegisterController::class, 'registerCompanyView'])->name('register.company.view');
    Route::post('register-company', [RegisterController::class, 'registerCompany'])->name('register.company');
    Route::get('pilih-role', function () {
        return view('auth.choice-of-roles');
    });
});


Route::middleware('auth')->group(function () {

    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::middleware('role:admin|staff')->group(function () {
        Route::get('dashboard-admin', [HomeController::class, 'dashboardAdmin'])->name('dashboardCity');
        Route::get('pie-chart', [HomeController::class, 'pieChart'])->name('pie.chart');
        Route::get('vacancy', [JobVacancyController::class, 'vacancyadmin']);
        Route::get('chart-alumni', [StudentController::class, 'chartAlumni'])->name('chart.alumni');

        Route::post('import-student', [StudentController::class, 'import'])->name('import.student');
        Route::get('company', [CompanyController::class, 'company'])->name('company');
        Route::get('verify-company', [CompanyController::class, 'index'])->name('verify.company');
        Route::patch('approve-verify-company/{company}', [CompanyController::class, 'approve'])->name('approve.verify.company');
        Route::patch('approve-verify-company-all', [CompanyController::class, 'approveAll'])->name('approve.verify.company.all');
        Route::patch('reject-verify-company-all', [CompanyController::class, 'rejectAll'])->name('reject.verify.company.all');
        Route::patch('reject-verify-company/{company}', [CompanyController::class, 'reject'])->name('reject.verify.company');

        Route::resources([
            'school-years' => SchoolYearController::class,
            'majors' => MajorController::class,
            'classrooms' => ClassroomController::class,
            'news' => NewsController::class,
            'survey' => SurveyController::class,
            'users' => AccountController::class
        ]);

        Route::get('survey-results/{survey}', [SurveyController::class, 'surveyResults'])->name('survey-results');

        Route::patch('change-alumni-select', [StudentStatusController::class, 'selectChangeAlumni'])->name('change.alumni.select');
        Route::patch('change-student-select', [StudentStatusController::class, 'selectChangeStudent'])->name('change.student.select');
        Route::get('student-status', [StudentStatusController::class, 'index'])->name('student.classroom');
        Route::get('detail-student-status-be/{classroom}', [StudentStatusController::class, 'show']);

        Route::get('detail-student-status/{classroom}', [StudentStatusController::class, 'studentAlumni'])->name('student.classroom.status');

        Route::patch('change-alumni/{student}', [StudentStatusController::class, 'changeAlumni'])->name('change.alumni');
        Route::patch('change-student/{student}', [StudentStatusController::class, 'changeStudent'])->name('change.student');

        Route::get('students', function () {
            return view('admin.student');
        })->name('students.index');
        Route::get('get-student', [StudentController::class, 'index']);
        Route::get('get-classroom', [ClassroomController::class, 'get']);
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
    Route::middleware('role:alumni')->prefix('alumni')->name('alumni.')->group(function () {
        Route::get('survei', [SurveyController::class, 'survey'])->name('job.survey');
        Route::post('submit-survey/{survey}', [SurveyController::class, 'submit'])->name('submit.survey');

        Route::get('detail-lowongan-tersedia/{job_vacancy}', [JobVacancyController::class, 'show'])->name('detail.lowongan.tersedia');
        Route::post('detail-lowongan-tersedia/{jobVacancy}', [ApplyJobVacancyController::class, 'store'])->name('send.cv');
        Route::get('lowongan-tersedia', [JobVacancyController::class, 'jobvacancy'])->name('vacancies.available');
        Route::get('lowongan', [ApplyJobVacancyController::class, 'index'])->name('job.vacancy.page');
    });
    Route::middleware('role:company')->group(function () {
        Route::get('dashboard-company', [HomeController::class, 'dashboardCompany'])->name('dashboard.company');
    });
    Route::middleware('role:student|alumni')->group(function () {
    });
    Route::get('portofolio', [PortofolioController::class, 'index'])->name('portofolio');

    Route::get('detail-applicant/{apply_job_vacancies}', [StudentController::class, 'detailApplicant'])->name('detail.applicant');

    Route::get('detail-applicant-portofolio/{student}', [PortofolioController::class, 'detail'])->name('detail.applicant.portofolio');
    Route::get('add-portofolio', function () {
        return view('student.add-portofolio');
    })->name('add.portofolio');
    Route::get('detail-portofolio/{portofolio}', [PortofolioController::class, 'show'])->name('detail.portofolio');

    Route::get('edit-portofolio/{portofolio}', [PortofolioController::class, 'edit'])->name('edit.portofolio');

    Route::get('job-applicant', [ApplyJobVacancyController::class, 'companyApplyJobVacancy'])->name('job-applicant');
    Route::patch('accept-job-vacancy/{apply_job_vacancies}', [ApplyJobVacancyController::class, 'accept'])->name('accept-job-vacancy');
    Route::patch('reject-job-vacancy/{apply_job_vacancies}', [ApplyJobVacancyController::class, 'reject'])->name('reject-job-vacancy');
    Route::get('profile-company', [UserController::class, 'company'])->name('profile-company');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::put('update-profile/{user}', [UserController::class, 'updateProfile'])->name('update.profile');
    Route::put('update-company-profile/{user}', [UserController::class, 'updateCompany'])->name('update-company-profile');
    Route::patch('update-photo-profile', [UserController::class, 'updatePhotoProfile'])->name('update-profile');
    Route::patch('update-password', [UserController::class, 'updatePassword'])->name('update-password');

    Route::get('province', [ProvinceController::class, 'index'])->name('province');
    Route::get('regency', [RegencyController::class, 'index'])->name('regency');
    Route::resources([
        'job-vacancy' => JobVacancyController::class,
    ]);

    Route::get('detail-lowongan-company/{job_vacancy}', [JobVacancyController::class, 'detail'])->name('detail.job-vacancy.company');


    Route::get('verify-account/{user}', [VerificationController::class, 'verify'])->name('verification.account');

    Route::get('apply-job-vacancy', function () {
        return view('emails.apply-job-vacancy');
    });

    Route::get('account-verification', [StudentController::class, 'viewVerificationStudent'])->name('account.verification');
    Route::get('account-alumni', [StudentController::class, 'viewVerificationAlumni'])->name('account.alumni');

    Route::patch('verification-student/{student}', [StudentController::class, 'verificationStudent'])->name('verification.student');
    Route::patch('verification-student-all', [StudentController::class, 'verificationStudentAll'])->name('verification.student.all');
    Route::patch('reject-student-all', [StudentController::class, 'rejectStudentAll'])->name('reject.student.all');
    Route::patch('reject-verification-student/{student}', [StudentController::class, 'rejectVerificationStudent'])->name('reject.verification.student');
    Route::get('alumni-register', function () {
        return view('admin.alumni-register');
    })->name('alumni.register');

    Route::post('portofolio', [PortofolioController::class, 'store'])->name('portofolio.store');
    Route::put('portofolio/{portofolio}', [PortofolioController::class, 'update'])->name('portofolio.update');
    Route::delete('portofolio/{portofolio}', [PortofolioController::class, 'destroy'])->name('portofolio.destroy');

    Route::get('detail-job-vacancy', function () {
        return view('admin.job-vacancy.detail');
    })->name('detail.job.vacancy');
});
