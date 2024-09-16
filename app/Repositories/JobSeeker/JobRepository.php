<?php

namespace App\Repositories\JobSeeker;

use App\Interfaces\JobSeeker\JobInterface;
use App\Models\CompanyJob;

class JobRepository implements JobInterface
{
    public function __construct(protected CompanyJob $jobs)
    {}

    public function get()
    {
        return $this->jobs->latest()->filter(request(['search']))->paginate(2);
    }
}
