<?php

namespace App\Interfaces;

interface BaseInterface
{
    public function getAll();
    public function create($request);
    public function find($id);
    public function update($id, $request);
}
