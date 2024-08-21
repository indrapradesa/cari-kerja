<?php

namespace App\Providers;

use App\Interfaces\Admin\CandidateInterface;
use App\Interfaces\Admin\CompanyJobInterface;
use App\Interfaces\Admin\InvoiceInterface;
use App\Interfaces\Admin\JobCategoryInterface;
use App\Interfaces\Admin\PartnerInterface;
use App\Interfaces\Admin\ServicePackageInterface;
use App\Repositories\Admin\CandidateRepository;
use App\Repositories\Admin\CompanyJobRepository;
use App\Repositories\Admin\InvoiceRepository;
use App\Repositories\Admin\JobCategoryRepository;
use App\Repositories\Admin\PartnerRepository;
use App\Repositories\Admin\ServicePackageRepository;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PartnerInterface::class, PartnerRepository::class);
        $this->app->bind(InvoiceInterface::class, InvoiceRepository::class);
        $this->app->bind(ServicePackageInterface::class, ServicePackageRepository::class);
        $this->app->bind(JobCategoryInterface::class, JobCategoryRepository::class);
        $this->app->bind(CompanyJobInterface::class, CompanyJobRepository::class);
        $this->app->bind(CandidateInterface::class, CandidateRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
