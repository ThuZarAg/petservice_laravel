<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_type extends Model
{
    protected $fillable = ['name','photo', 'description'];

     public function package()
  {
      return $this->belongsTo('App\Package');
  }
}
