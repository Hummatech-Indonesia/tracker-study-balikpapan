<?php

namespace App\Providers;

use App\Models\Classroom;
use App\Models\Company;
use App\Models\Major;
use App\Models\News;
use App\Models\Student;
use App\Models\TeacherGallery;
use App\Models\User;
use App\Observers\ClassroomObserver;
use App\Observers\CompanyObserver;
use App\Observers\MajorObserver;
use App\Observers\NewsObserver;
use App\Observers\StudentObserver;
use App\Observers\TeacherGalleryObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
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
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
