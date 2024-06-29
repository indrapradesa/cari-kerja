<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partner extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('company_name', 'like', '%'.$search.'%')
            ->orWhere('partner_unique', 'like', '%'.$search.'%')
        );

    }

    public function package() :BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id', 'id_package');
    }

    public function invoices() :HasMany
    {
        return $this->hasMany(Invoice::class, 'partner_unique_id', 'partner_unique');
    }
}
