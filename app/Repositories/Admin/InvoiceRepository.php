<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\InvoiceInterface;
use App\Models\Invoice;

class InvoiceRepository implements InvoiceInterface
{
    public function __construct(protected Invoice $invoice)
    {}

    public function create($request)
    {
        return $this->invoice->create($request);
    }

    public function update($request, $partnerId)
    {
        return $this->invoice->where('partner_unique_id', $partnerId)->update($request);
    }

    public function allHistories($partnerId)
    {
        return $this->invoice->where('partner_unique_id', $partnerId)->get();
    }

    public function findLastInvoice($partnerId)
    {
        return $this->invoice->where('partner_unique_id', $partnerId)->latest()->paginate(10);
    }

}
