<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\CandidateInterface;

class CandidateService
{
    public function __construct(protected CandidateInterface $interface)
    {}

    public function get()
    {
        $results = $this->interface->get();

        if (isset($results)) {
            return $results;
        }

        return null;
    }

    public function find($id)
    {
        $result = $this->interface->find($id);

        if (isset($result)) {
            return $result;
        }

        return null;
    }
}
