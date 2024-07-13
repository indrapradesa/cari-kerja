<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\CompanyJobInterface;
use App\Interfaces\Admin\PartnerInterface;
use App\Models\Partner;

class CompanyJobService
{
    public function __construct(protected CompanyJobInterface $companyJobInterface, protected PartnerInterface $partnerInterface)
    {

    }

    public function getCompanyJob()
    {
        return $this->companyJobInterface->getAll();
    }

    public function getPartnerActive()
    {
        return $this->partnerInterface->partnerActive();
    }

    public function findJobById($id)
    {
        return $this->companyJobInterface->find($id);
    }

    public function create($request)
    {
        $colReq = collect($request)->except('_token');
        // if(auth()->user->partner == null){
        //     $data['is_admin'] = true;
        //     $newData = $colReq->merge([$data]);
        // }else{
        //     $data['partner_id'] = auth()->user->partner->id;
        //     $data['partner_id'] = auth()->user->partner->id;
        //     $newData = $colReq->merge([$data]);
        // }

        return $this->companyJobInterface->create($colReq->all());
    }

    public function update($id, $request)
    {
        $colReq = collect($request)->except('_token', '_method');
        return $this->companyJobInterface->update($id, $colReq->all());
    }
}
