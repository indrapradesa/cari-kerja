<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerUpdateRequest;
use App\Services\Admin\InvoiceService;
use App\Services\Admin\PartnerService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function __construct(protected PartnerService $partnerService, protected InvoiceService $invoiceService)
    {}

    public function index()
    {
        $results = $this->partnerService->getPartners();
        return view('admin.partners.index', compact('results'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($partnerId)
    {
        try {
            $partner = $this->partnerService->findPartner($partnerId);
            $invoices = $this->invoiceService->findLastHistory($partnerId);
            return view('admin.partners.show', compact('partner', 'invoices'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($partnerId)
    {
        try {
            $partner = $this->partnerService->findPartner($partnerId);
            return view('admin.partners.edit', compact('partner'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(PartnerUpdateRequest $request, $partnerId)
    {
        try {
            $this->partnerService->update($request->validated(), $partnerId);
            return redirect()->back()->with('success', 'Partner updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
