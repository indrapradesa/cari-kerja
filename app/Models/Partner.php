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
            ->orWhere('partner_uniques', 'like', '%'.$search.'%')
        );

    }

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function package() :BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function invoices() :HasMany
    {
        return $this->hasMany(Invoice::class, 'partner_id', 'id');
    }

    public function jobs() :HasMany
    {
        return $this->hasMany(CompanyJob::class, 'partner_id', 'id');
    }

    public function account()
    {
        return $this->belongsTo(User::class, 'employeer_id', 'partner_uniques');
    }
}
