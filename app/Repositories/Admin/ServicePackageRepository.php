<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ServicePackageInterface;
use App\Models\Package;

class ServicePackageRepository implements ServicePackageInterface
{

    public function __construct(protected Package $package)
    {

    }

    public function getAll()
    {
        return $this->package->filter(request(['search']))->paginate(10);
    }

    public function store($request)
    {
        return $this->package->create($request);
    }

    public function update($request, $id)
    {
        return $this->package->find($id)->update($request);
    }

    public function find($id)
    {
        return $this->package->find($id);
    }

    public function delete($id)
    {
        return $this->package->delete($id);
    }

}
