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
        $colData = collect($request);

        return $this->partnerInterface->update($colData->all(), $partnerId);
    }
}
