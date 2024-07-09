<?php

namespace App\Interfaces\Admin;

interface ServicePackageInterface
{
    public function getAll();
    public function store($request);
    public function update($request, $id);
    public function find($id);
    public function delete($id);
}
