<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Invoice extends Model
{
    use HasFactory;

    public function invoicePartner() :BelongsTo
    {
        return $this->belongsTo(Partner::class, 'partner_unique_id', 'partner_unique');
    }
}
