<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyJob extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('job_title', 'like', '%'.$search.'%')
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $originalSlug = Str::slug($model->job_title);
            $slug = $originalSlug;
            $count = 1;

            while (CompanyJob::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '_' . $count;
                $count++;
            }

            $model->slug = $slug;
        });
    }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function partner() :BelongsTo
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }
}
