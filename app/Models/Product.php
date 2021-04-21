<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['category_id','item_no','user_id'];

    public function category(){
    	return $this->hasOne('App\Model\Category','$id','category_id');
    }

    public function user(){
    	return $this->hasMany('App\Model\User','$id', 'user_id');
    }
}
