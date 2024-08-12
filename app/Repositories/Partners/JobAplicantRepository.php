<?php

namespace App\Repositories\Partners;

use App\Interfaces\Partners\JobAplicantInterface;
use App\Models\Category;
use App\Models\CompanyJob;

class JobAplicantRepository implements JobAplicantInterface
{
    public function __construct(protected CompanyJob $companyJob, protected Category $category)
    {

    }
    public function getAll()
    {
        return $this->companyJob->where('partner_id', auth()->user()->partner->id)->latest()->paginate(10);
    }

    public function create($request)
    {
        return $this->companyJob->create($request);
    }

    public function find($id)
    {
        return $this->companyJob->find($id);
    }

    public function update($id, $request)
    {
        return $this->companyJob->find($id)->update($request);
    }

    public function getCategory()
    {
        return $this->category->get();
    }

    public function delete($id)
    {
        return $this->companyJob->find($id)->delete();
    }

}
