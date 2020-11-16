<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'codeno', 'name', 'photo', 'price', 'discount', 'description', 'subcategory_id'
    ];

    public function subcategory()
  	{
    	return $this->belongsTo('App\Subcategory');
  	}

  	 public function orders()
	{
	    return $this->belongsToMany('App\Order','orderdetails')
	                ->withPivot('quantity')
	                ->withTimestamps();
	}

    
}