<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable=['date','voucher_no','total','counter_id'];
}
