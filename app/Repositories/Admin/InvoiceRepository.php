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
        return $this->invoice->where('partner_id', $partnerId)->update($request);
    }

    public function allHistories($id)
    {
        return $this->invoice->where('partner_id', $id)->get();
    }

    public function findLastInvoice($id)
    {
        return $this->invoice->where('partner_id', $id)->latest()->paginate(10);
    }

}
