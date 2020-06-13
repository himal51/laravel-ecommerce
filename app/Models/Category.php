<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = str_slug($category->name);
        });
    }


    public function parent_category()
    {
        //return $this->belongsTo(Category::class);
        return $this->belongsTo(Category::class);
    }


    public function child_category()
    {
        //return $this->hasMany(Category::class);
        return $this->hasMany(Category::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
