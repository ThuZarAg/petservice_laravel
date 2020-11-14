<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable=["orderno", "orderdate", "totalamount", "notes", "status", "user_id"];

  public function items()
  {
    return $this->belongsToMany('App\Item','orderdetails')
                ->withPivot('quantity')
                ->withTimestamps();
  }

  public function user($value='')
  {
    return $this->belongsTo('App\User');
  }
}
