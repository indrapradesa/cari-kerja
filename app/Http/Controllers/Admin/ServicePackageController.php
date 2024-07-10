<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePackageRequest;
use App\Http\Requests\Admin\UpdatePackageRequest;
use App\Services\Admin\ServicePackageService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ServicePackageController extends Controller
{

    public function __construct(protected ServicePackageService $servicePackageService)
    {}

    public function index()
    {
        $results = $this->servicePackageService->getAll();
        return view('admin.loker.paket.index', compact('results'));
    }

    public function create()
    {
        return view('admin.loker.paket.paket-create');
    }

    public function store(StorePackageRequest $request)
    {
        try {
            $this->servicePackageService->create($request->validated());
            return redirect()->route('admin.packages.index')->with('success', 'Service Package created successfully');
        } catch (ValidationException $e) {
            return redirect()->back()
                             ->withErrors($e->validator)
                             ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $result = $this->servicePackageService->find($id);

        return response()->json($result);
    }

    public function update(UpdatePackageRequest $request)
    {
        try {
            $this->servicePackageService->update($request->validated(), $request->id);
            return redirect()->back()->with('success', 'Service Package updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()
                             ->withErrors($e->validator)
                             ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:packages,id',
                'is_active' => 'required|boolean'
            ]);

            $this->servicePackageService->update($request, $request->id);
            return redirect()->back()->with('success', 'Service Package updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:packages,id'
            ]);
            $this->servicePackageService->delete($request->id);
            return redirect()->back()->with('success', 'Service Package deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
