<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function customer(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function processor(){
        return $this->hasOne(User::class,'processed_by');
    }


    public function products(){
        return $this->hasMany(OrderProduct::class);
    }


}
