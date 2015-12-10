<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $guarded = ['id'];
	
    public function user(){
	    return $this->belongsTo('App\User');
	}

	public function getTitle()
	{
	    return $this->customer_id;
	}
}
