<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\CompanyJobInterface;
use App\Models\CompanyJob;

class CompanyJobRepository implements CompanyJobInterface
{
    public function __construct(protected CompanyJob $companyJob)
    {}

    public function getAll()
    {
        return $this->companyJob->filter(request(['search']))->latest()->paginate(10);
    }

    public function find($id)
    {
        return $this->companyJob->find($id);
    }

    public function create($request)
    {
        return $this->companyJob->create($request);
    }
    public function update($id, $request)
    {
        return $this->companyJob->find($id)->update($request);
    }

}
