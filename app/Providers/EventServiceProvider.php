<?php

namespace App\Providers;

use App\Models\News;
use App\Models\User;
use App\Models\Major;
use App\Models\Survey;
use App\Models\Company;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\JobVacancy;
use App\Models\GalleryAlumni;
use App\Models\TeacherGallery;
use App\Models\ApplyJobVacancy;
use App\Observers\NewsObserver;
use App\Observers\UserObserver;
use App\Observers\MajorObserver;
use App\Observers\SurveyObserver;
use App\Models\AlumniVideoGallery;
use App\Models\PhotoPortofolio;
use App\Models\Portofolio;
use App\Observers\CompanyObserver;
use App\Observers\StudentObserver;
use App\Models\SliderGalleryAlumni;
use App\Models\TeacherVideoGallery;
use App\Observers\ClassroomObserver;
use App\Observers\JobVacancyObserver;
use Illuminate\Auth\Events\Registered;
use App\Observers\GalleryAlumniObserver;
use App\Observers\TeacherGalleryObserver;
use App\Observers\ApplyJobVacancyObserver;
use App\Observers\AlumniVideoGalleryObserver;
use App\Observers\PhotoPortofolioObserver;
use App\Observers\PortofolioObserver;
use App\Observers\SliderGalleryAlumniObserver;
use App\Observers\TeacherVideoGalleryObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Major::observe(MajorObserver::class);
        Classroom::observe(ClassroomObserver::class);
        News::observe(NewsObserver::class);
        TeacherGallery::observe(TeacherGalleryObserver::class);
        Student::observe(StudentObserver::class);
        Company::observe(CompanyObserver::class);
        Survey::observe(SurveyObserver::class);
        TeacherVideoGallery::observe(TeacherVideoGalleryObserver::class);
        AlumniVideoGallery::observe(AlumniVideoGalleryObserver::class);
        GalleryAlumni::observe(GalleryAlumniObserver::class);
        SliderGalleryAlumni::observe(SliderGalleryAlumniObserver::class);
        JobVacancy::observe(JobVacancyObserver::class);
        ApplyJobVacancy::observe(ApplyJobVacancyObserver::class);
        Portofolio::observe(PortofolioObserver::class);
        PhotoPortofolio::observe(PhotoPortofolioObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
