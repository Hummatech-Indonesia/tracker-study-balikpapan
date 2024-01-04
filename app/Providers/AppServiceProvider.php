<?php

namespace App\Providers;

use App\Contracts\Interfaces\AlumniVideoGalleryInterface;
use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\MajorInterface;
use App\Contracts\Interfaces\NewsInterface;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\SurveyInterface;
use App\Contracts\Interfaces\TeacherGalleryInterface;
use App\Contracts\Interfaces\TeacherVideoGalleryInterface;
use App\Contracts\Repositories\AlumniVideoGalleryRepository;
use App\Contracts\Interfaces\UserInterface;
use App\Contracts\Repositories\ClassroomRepository;
use App\Contracts\Repositories\CompanyRepository;
use App\Contracts\Repositories\MajorRepository;
use App\Contracts\Repositories\NewsRepository;
use App\Contracts\Repositories\RegisterRepository;
use App\Contracts\Repositories\SchoolYearRepository;
use App\Contracts\Repositories\StudentRepository;
use App\Contracts\Repositories\SurveyRepository;
use App\Contracts\Repositories\TeacherGalleryRepository;
use App\Contracts\Repositories\TeacherVideoGalleryRepository;
use App\Contracts\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        RegisterInterface::class => RegisterRepository::class,
        SchoolYearInterface::class => SchoolYearRepository::class,
        MajorInterface::class => MajorRepository::class,
        ClassroomInterface::class => ClassroomRepository::class,
        NewsInterface::class => NewsRepository::class,
        TeacherGalleryInterface::class => TeacherGalleryRepository::class,
        StudentInterface::class => StudentRepository::class,
        CompanyInterface::class => CompanyRepository::class,
        SurveyInterface::class => SurveyRepository::class,
        TeacherVideoGalleryInterface::class => TeacherVideoGalleryRepository::class,
        AlumniVideoGalleryInterface::class => AlumniVideoGalleryRepository::class,
        UserInterface::class => UserRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
