<?php

namespace App\Http\Controllers;

use App\Services\Jobseeker\JobServeice;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct(protected JobServeice $service)
    {

    }
    public function index()
    {
        $jobs = $this->service->get();
        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        return view('jobs.show');
    }
}
