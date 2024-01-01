<?php

namespace App\Providers;

use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\MajorInterface;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\RegisterInterface;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Contracts\Repositories\ClassroomRepository;
use App\Contracts\Repositories\MajorRepository;
use App\Contracts\Repositories\RegisterRepository;
use App\Contracts\Repositories\SchoolYearRepository;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        RegisterInterface::class => RegisterRepository::class,
        SchoolYearInterface::class => SchoolYearRepository::class,
        MajorInterface::class => MajorRepository::class,
        ClassroomInterface::class => ClassroomRepository::class
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
