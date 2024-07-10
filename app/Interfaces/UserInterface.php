<?php

namespace App\Interfaces;

interface UserInterface
{
    public function createUser($request);
    public function updateUser($request, $id);
}
