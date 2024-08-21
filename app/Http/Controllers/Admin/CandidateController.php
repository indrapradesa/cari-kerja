<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CandidateService;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function __construct(protected CandidateService $service)
    {

    }

    public function index()
    {
        $candidates = $this->service->get();
        return view('admin.candidates.index', compact('candidates'));
    }

    public function show($id)
    {
        $candidate = $this->service->find($id);
        return view('admin.candidates.show', compact('candidate'));
    }
}
