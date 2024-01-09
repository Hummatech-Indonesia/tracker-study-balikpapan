<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\UserInterface;
use App\Contracts\Interfaces\MajorInterface;
use App\Contracts\Interfaces\SurveyInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Repositories\NewsRepository;
use App\Contracts\Repositories\UserRepository;
use App\Contracts\Repositories\MajorRepository;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Repositories\SurveyRepository;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Contracts\Repositories\CompanyRepository;
use App\Contracts\Repositories\StudentRepository;
use App\Contracts\Repositories\RegisterRepository;
use App\Contracts\Repositories\ClassroomRepository;
use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\GalleryAlumniInterface;
use App\Contracts\Repositories\JobVacancyRepository;
use App\Contracts\Repositories\SchoolYearRepository;
use App\Contracts\Interfaces\TeacherGalleryInterface;
use App\Contracts\Interfaces\ApplyJobVacancyInterface;
use App\Contracts\Repositories\GalleryAlumniRepository;
use App\Contracts\Repositories\TeacherGalleryRepository;
use App\Contracts\Interfaces\AlumniVideoGalleryInterface;
use App\Contracts\Interfaces\PhotoPortofolioInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Contracts\Repositories\ApplyJobVacancyRepository;
use App\Contracts\Interfaces\SliderGalleryAlumniInterface;
use App\Contracts\Interfaces\SubmitSurveyInterface;
use App\Contracts\Interfaces\TeacherVideoGalleryInterface;
use App\Contracts\Repositories\AlumniVideoGalleryRepository;
use App\Contracts\Repositories\PhotoPortofolioRepository;
use App\Contracts\Repositories\PortofolioRepository;
use App\Contracts\Repositories\SliderGalleryAlumniRepository;
use App\Contracts\Repositories\SubmitSurveyRepository;
use App\Contracts\Repositories\TeacherVideoGalleryRepository;

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
        UserInterface::class => UserRepository::class,
        GalleryAlumniInterface::class => GalleryAlumniRepository::class,
        SliderGalleryAlumniInterface::class => SliderGalleryAlumniRepository::class,
        JobVacancyInterface::class => JobVacancyRepository::class,
        ApplyJobVacancyInterface::class => ApplyJobVacancyRepository::class,
        PortofolioInterface::class => PortofolioRepository::class,
        PhotoPortofolioInterface::class => PhotoPortofolioRepository::class,
        SubmitSurveyInterface::class => SubmitSurveyRepository::class
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
