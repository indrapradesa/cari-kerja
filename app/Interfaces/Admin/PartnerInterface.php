<?php

namespace App\Interfaces\Admin;

interface PartnerInterface
{
    public function getAll();
    public function store($request);
    public function find($partnerId);
    public function update($request, $partnerId);
}
