<?php

namespace App\Http\Controllers\Partners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partners\StoreJobRequest;
use App\Http\Requests\Partners\UpdateJobRequest;
use App\Services\Partners\JobAplicantService;
use App\Traits\HandlesErrors;
use Illuminate\Http\Request;

class JobAplicantController extends Controller
{

    use HandlesErrors;

    public function __construct(protected JobAplicantService $service)
    {

    }
    public function index()
    {
        $jobs = $this->service->get();

        return view('partners.job-aplicants.index', compact('jobs'));
    }

    public function create()
    {
        $categories = $this->service->getCategory();
        return view('partners.job-aplicants.create', compact('categories'));
    }

    public function store(StoreJobRequest $request)
    {
        try {
            $this->service->create($request->validated());
            return redirect()->route('partners.jobAplicants.index')->with('success', 'Loker baru berhasil di buat!');
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function show($id)
    {
        try {
            $job = $this->service->find($id);
            return view('partners.job-aplicants.show', compact('job'));
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    public function edit($id)
    {
        $job = $this->service->find($id);
        $categories = $this->service->getCategory();
        return view('partners.job-aplicants.edit', compact('job', 'categories'));
    }

    public function update(UpdateJobRequest $request, $id)
    {
        try {
            $request['type'] = 'data';
            $this->service->update($id, $request->validated());
            return redirect()->route('partners.jobAplicants.show', $id)->with('success', 'Job updated successfully');
        } catch (\Exception $e) {
            // return $this->handleException($e);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $request['type'] = 'data';
            $request->validate([
                'type' => 'required',
                'is_open' => 'required|boolean'
            ]);
            $this->service->update($id, $request);
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->back()->with('success', 'Successfully deleted');
    }
}
