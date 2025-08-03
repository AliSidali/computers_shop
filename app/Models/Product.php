<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelMethods;

class Product extends Model
{
    use HasSlug;
    use ModelMethods;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'quantity',
        'price',
        'inStock',
        'published',
        'created_by',
        'updated_by',
        'brand_id',
        'category_id',
        'deleted_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
