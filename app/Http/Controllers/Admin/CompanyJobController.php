<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreJobRequest;
use App\Services\Admin\CompanyJobService;
use App\Services\Admin\JobCategoryService;
use App\Services\Admin\ServicePackageService;
use Illuminate\Http\Request;

class CompanyJobController extends Controller
{
    public function __construct(protected CompanyJobService $companyJobService,
                                protected ServicePackageService $servicePackageService,
                                protected JobCategoryService $jobCategoryService)
    {

    }

    public function index()
    {
        $results = $this->companyJobService->getCompanyJob();

        return view('admin.loker.loker-partners.index', compact('results'));
    }

    public function create()
    {
        $partners = $this->companyJobService->getPartnerActive();
        $paket = $this->servicePackageService->getAll();
        $kategoriLoker = $this->jobCategoryService->getCategories();

        return view('admin.loker.loker-partners.create', compact('paket', 'kategoriLoker', 'partners'));
    }

    public function store(StoreJobRequest $request)
    {
        try {
            $this->companyJobService->create($request->validated());
            return redirect()->route('admin.loker-partners.index')->with('success', 'Loker baru berhasil di buat!');
        } catch (\Exception $e) {
            // return redirect()->back()->with('error', 'Gagal membuat loker baru!');
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $job = $this->companyJobService->findJobById($id);
            $paket = $this->servicePackageService->getAll();
            $kategoriLoker = $this->jobCategoryService->getCategories();
            return view('admin.loker.loker-partners.edit', compact('job', 'paket', 'kategoriLoker'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->companyJobService->update($id, $request);
            return redirect()->route('admin.loker-partners.show', $id)->with('success', 'Loker baru berhasil di update!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan!');
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $request->validate([
                'is_open' => 'required|boolean'
            ]);

            $this->companyJobService->update($id, $request);
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $job = $this->companyJobService->findJobById($id);
            return view('admin.loker.loker-partners.show', compact('job'));
        } catch (\Exception $e) {
            return redirect()->route('admin.loker-partners.index')->with('error', $e->getMessage());
        }
    }
}
