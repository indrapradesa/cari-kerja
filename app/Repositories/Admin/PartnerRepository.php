<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\PartnerInterface;
use App\Models\Partner;
use App\Models\User;

class PartnerRepository implements PartnerInterface
{

    protected $partner, $user;

    public function __construct(Partner $partner, User $user)
    {
        $this->partner = $partner;
        $this->user = $user;
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
        return $this->partner->where('partner_uniques', $partnerId)->first();
    }

    public function update($request, $partnerId)
    {
        return $this->partner->where('partner_uniques', $partnerId)->update($request);
    }

    // User
    public function createUser($request)
    {
        $this->user->create($request);
    }

    public function updateUser($request, $id)
    {
        $this->user->findOrFail($id)->update($request);
    }


}
