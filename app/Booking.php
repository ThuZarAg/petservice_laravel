<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'petname',
    						 'description', 'servicetype_id', 'package_id', 'start_date'
    ];


public function servicetype()
  {
      return $this->belongsTo('App\Service_type');
  }

  public function package()
  {
      return $this->belongsTo('App\Package');
  }

  }