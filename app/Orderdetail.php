<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable=['voucher_no','meat_id','qty'];

    public function meat(){
    	return $this->belongsTo('App\Meat');
    }
}
