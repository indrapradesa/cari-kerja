<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_category',
        'slug',
    ];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('name_category', 'like', '%'.$search.'%')
        );

    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $originalSlug = Str::slug($model->name_category);
            $slug = $originalSlug;
            $count = 1;

            while (Category::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '_' . $count;
                $count++;
            }

            $model->slug = $slug;
        });
    }

    public function jobCategories() :HasMany
    {
        return $this->hasMany(CompanyJob::class, 'category_id', 'id');
    }
}
