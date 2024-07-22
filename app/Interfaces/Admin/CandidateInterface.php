<?php

namespace App\Interfaces\Admin;

interface CandidateInterface
{
    public function get();
    public function create($request);
    public function find($id);
}
