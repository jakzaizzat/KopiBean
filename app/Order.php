<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $guarded = ['id'];

    public function coffee(){
    	return $this->belongsTo('App\coffee');
    }

    public function pastry(){
    	return $this->belongsTo('App\Pastry');
    }

     public function getOrder(){
    	return $this->id;
    }
}
