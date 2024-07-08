<?php

namespace App\Interfaces\Admin;

interface InvoiceInterface
{
    public function create($request);
    public function update($request, $partnerId);
    public function allHistories($partnerId);
    public function findLastInvoice($partnerId);
}
