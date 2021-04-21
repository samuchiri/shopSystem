<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories'
    protected $fillable=['title','description'];

    public function product(){
    	return $this->hasOne('App\Model\Product','$id','$product_id');
    }
}
