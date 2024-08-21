<?php

namespace App\Interfaces\Partners;

interface RekomAplicantInterface
{
    public function get();
    public function find($id);
    public function show($id);
}
