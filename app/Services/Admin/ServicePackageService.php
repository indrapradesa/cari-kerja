<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\ServicePackageInterface;

class ServicePackageService
{
    public function __construct(protected ServicePackageInterface $servicePackageInterface)
    {}

    public function getAll()
    {
        return $this->servicePackageInterface->getAll();
    }

    public function find($id)
    {
        return $this->servicePackageInterface->find($id);
    }

    public function create($request)
    {
        try {
            $colReq = collect($request)->except('_method', '_token');
            return $this->servicePackageInterface->store($colReq->all());
        } catch (\Exception $e) {
            return throw new \Exception($e->getMessage());
        }
    }

    public function update($request, $id)
    {
        try {
            $colReq = collect($request)->except('_method', '_token', 'id');
            return $this->servicePackageInterface->update($colReq->all(), $id);
        } catch (\Exception $e) {
            return throw new \Exception($e->getMessage());
        }
    }

    public function delete($id)
    {
        return $this->servicePackageInterface->delete($id);
    }
}
