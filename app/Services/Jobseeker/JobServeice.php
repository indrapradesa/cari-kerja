<?php

namespace App\Services\Jobseeker;

use App\Interfaces\JobSeeker\JobInterface;

class JobServeice
{
    public function __construct(protected JobInterface $interface)
    {}

    public function get()
    {
        $jobs = $this->interface->get();

        if (isset($jobs)) {
            return $jobs;
        }

        return null;
    }
}
