<?php

namespace App\Interfaces\Admin;

interface JobCategoryInterface
{
    public function getAll();
    public function create($request);
    public function find($id);
    public function update($request, $id);
}
