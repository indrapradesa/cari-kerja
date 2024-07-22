<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\JobCategoryService;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{

    public function __construct(protected JobCategoryService $jobCategoryService)
    {

    }

    public function index()
    {
        $categories = $this->jobCategoryService->getCategories();
        return view('admin.loker.kategori.index', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $this->jobCategoryService->create($request);
            return redirect()->back()->with('success', 'Category has been successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $result = $this->jobCategoryService->find($id);

        return response()->json($result);
    }

    public function update(Request $request)
    {
        try {
            $this->jobCategoryService->update($request, $request->id);
            return redirect()->back()->with('success', 'Category has been successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

        } catch (\Exception $e) {

        }
    }
}
