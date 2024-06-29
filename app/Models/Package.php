<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    public function packagePartners() :HasMany
    {
        return $this->hasMany(Partner::class, 'package_id', 'id_package');
    }
}
