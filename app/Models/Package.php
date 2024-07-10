<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('name_package', 'like', '%'.$search.'%')
        );

    }

    public function packagePartners() :HasMany
    {
        return $this->hasMany(Partner::class, 'package_id', 'id');
    }
}
