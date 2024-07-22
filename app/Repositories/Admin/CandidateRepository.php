<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\CandidateInterface;
use App\Models\JobSekker;

class CandidateRepository implements CandidateInterface
{

    public function __construct(protected JobSekker $jobSekker)
    {}

    public function get()
    {
        return $this->jobSekker->get();
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
