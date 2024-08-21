<?php

namespace App\Providers;

use App\Interfaces\Partners\JobAplicantInterface;
use App\Repositories\Partners\JobAplicantRepository;
use Illuminate\Support\ServiceProvider;

class PartnerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(JobAplicantInterface::class, JobAplicantRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
