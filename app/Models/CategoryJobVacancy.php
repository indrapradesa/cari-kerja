<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryJobVacancy extends Model
{
    use HasFactory;

    public function jobCategories() :HasMany
    {
        return $this->hasMany(ListJob::class, 'category_id', 'id_category');
    }
}
