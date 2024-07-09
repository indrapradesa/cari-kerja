<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\JobCategoryInterface;

class JobCategoryService
{
    public function __construct(protected JobCategoryInterface $jobCategoryInterface)
    {

    }

    public function getCategories()
    {
        return $this->jobCategoryInterface->getAll();
    }

    public function create($request)
    {
        $data['name_category'] = $request['name_category'];

        return $this->jobCategoryInterface->create($data);
    }

    public function find($id)
    {
        return $this->jobCategoryInterface->find($id);
    }

    public function update($request, $id)
    {
        $data['name_category'] = $request['name_category'];
        return $this->jobCategoryInterface->update($data, $id);
    }
}
