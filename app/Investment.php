<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
   protected $fillable=[
        'category',
        'description',
        'acquired_value',
        'acquired_date',
        'recent_value',
        'customer_id',
        'recent_date',
     ];

     
     public function customer() {
        return $this->belongsTo('App\Customer');
    }


}
