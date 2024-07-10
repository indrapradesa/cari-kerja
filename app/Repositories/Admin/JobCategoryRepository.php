<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\JobCategoryInterface;
use App\Models\Category;

class JobCategoryRepository implements JobCategoryInterface
{
    public function __construct(protected Category $category)
    {

    }

    public function getAll()
    {
        return $this->category->filter(request(['search']))->latest()->paginate(10);
    }

    public function create($request)
    {
        return $this->category->create($request);
    }

    public function find($id)
    {
        return $this->category->find($id);
    }

    public function update($request, $id)
    {
        return $this->category->find($id)->update($request);
    }

}
