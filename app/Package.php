<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable = ['name','duration', 'price','total','servicetype_id'];

     public function service_type()
  {
      return $this->hasMany('App\Service_type');
  }

   public function booking()
  {
      return $this->belongsTo('App\Booking');
  }

}
