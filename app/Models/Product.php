<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use HasMediaTrait; 
    
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
    public function boot(){
        parent::boot();
        
        static::creating(function($product){
            $product->slug = str_slug($product->title);
        });
    }



    public function category(){
        return $this->hasOne(Category::class);
    }
}
