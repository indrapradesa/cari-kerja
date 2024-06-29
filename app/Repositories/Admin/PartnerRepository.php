<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\PartnerInterface;
use App\Models\Partner;

class PartnerRepository implements PartnerInterface
{

    protected $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function getAll()
    {
        return $this->partner->latest()->filter(request(['search']))->paginate(25);
    }

    public function store($request)
    {
        return $this->partner->create($request);
    }

    public function find($partnerId)
    {
        return $this->partner->where('partner_unique', $partnerId)->first();
    }

    public function update($request, $partnerId)
    {
        return $this->partner->where('partner_unique', $partnerId)->update($request);
    }

}
