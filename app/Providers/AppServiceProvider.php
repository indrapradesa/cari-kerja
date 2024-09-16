<?php

namespace App\Providers;

use App\Interfaces\JobSeeker\JobInterface;
use App\Repositories\JobSeeker\JobRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(JobInterface::class, JobRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
