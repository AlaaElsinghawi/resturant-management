<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{ 
	public $table='orders';
    public $fillable=['total','customer_id','time_order'];
    public function customer()
    {
    	return $this->belongsto('App\Customer','customer_id');
    }
    public function meals()
    {
    	return $this->belongsToMany('App\Meal','order_meal');
    }
    /*public function meals()
    {
    	return $this->belongsToMany('App\Meal');
    }*/
}
