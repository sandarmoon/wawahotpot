<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meat extends Model

{
	use SoftDeletes;
    protected $fillable=['name','price','photo','category_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function orderdetail(){
    	return $this->hasMany('App\Orderdetail');
    }
}
