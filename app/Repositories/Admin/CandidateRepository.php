<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\CandidateInterface;
use App\Models\JobSeeker;

class CandidateRepository implements CandidateInterface
{

    public function __construct(protected JobSeeker $jobSekker)
    {}

    public function get()
    {
        return $this->jobSekker->latest()->filter(request(['search']))->paginate(10);
    }

    public function create($request)
    {
        return $this->jobSekker->create($request);
    }

    public function find($id)
    {
        return $this->jobSekker->find($id);
    }

}
