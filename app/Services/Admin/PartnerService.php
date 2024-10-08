<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\PartnerInterface;

class PartnerService
{
    public function __construct(protected PartnerInterface $partnerInterface)
    {}

    public function getPartners()
    {
        return $this->partnerInterface->getAll();
    }

    public function findPartner($partnerId)
    {
        return $this->partnerInterface->find($partnerId);
    }

    public function update($request, $partnerId)
    {
        $findPartner = $this->partnerInterface->find($partnerId);
        $colData = collect($request)->except('email', '_token', '_method');

        if($request['email'] != $findPartner->employer->email){
            $data['email'] = $request['email'];
            $this->partnerInterface->updateUser($data, $findPartner->employer_id);
        }

        return $this->partnerInterface->update($colData->all(), $partnerId);
    }
}
