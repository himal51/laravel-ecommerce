<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function parent_category(){
        //return $this->belongsTo(Category::class);
        return $this->belongsTo(__CLASS__);
    }


    public function child_category(){
        //return $this->hasMany(Category::class);
        return $this->hasMany(__CLASS__);
    }


    public function products(){ 
        return $this->hasMany(Product::class);
    }
}
