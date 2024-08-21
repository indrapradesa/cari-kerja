<?php

namespace App\Services\Admin;

use App\Interfaces\Admin\InvoiceInterface;

class InvoiceService
{
    public function __construct(protected InvoiceInterface $invoiceInterface)
    {}

    public function createInvoice($request)
    {

    }

    public function updateInvoice($request, $partnerId)
    {

    }

    public function getHistories($partnerId)
    {

    }

    public function findLastHistory($partnerId)
    {
        return $this->invoiceInterface->findLastInvoice($partnerId);
    }
}
