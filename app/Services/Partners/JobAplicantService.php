<?php

namespace App\Services\Partners;

use App\Interfaces\Partners\JobAplicantInterface;

class JobAplicantService
{
    public function __construct(protected JobAplicantInterface $interface)
    {

    }

    public function get()
    {
        $jobs = $this->interface->getAll();

        if (isset($jobs)) {
            return $jobs;
        }

        return null;
    }

    public function getCategory()
    {
        $jobs = $this->interface->getCategory();

        if (isset($jobs)) {
            return $jobs;
        }

        return null;
    }

    public function find($id)
    {
        $job = $this->interface->find($id);

        if (isset($job)) {
            return $job;
        }

        return null;
    }

    public function create($request)
    {
        $reqCol = collect($request)->merge(['partner_id' => auth()->user()->partner->id]);
        return $this->interface->create($reqCol->all());
    }

    public function update($id, $request)
    {
        if ($request['type'] == 'data') {
            $colReq = collect($request);
            return $this->interface->update($id, $colReq->all());
        } elseif ($request['type'] == 'status') {
            $job = $this->interface->find($id);
            if ($job->date_posted == null && $job->date_closing == null) {
                return throw new \Exception('Date posted or date close is required');
            }
            $colReq = collect($request);
            return $this->interface->update($id, $colReq->all());
        }
    }

    public function destroy($id)
    {
        return $this->interface->delete($id);
    }
}
