<?php

namespace App\Interfaces\Admin;

use App\Interfaces\UserInterface;

interface PartnerInterface extends UserInterface
{
    public function getAll();
    public function partnerActive();
    public function store($request);
    public function find($partnerId);
    public function update($request, $partnerId);
}
