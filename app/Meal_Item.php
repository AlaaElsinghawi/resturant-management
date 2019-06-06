<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal_Item extends Model
{
	public $table='meal_item';
	public $fillable=['item_id','meal_id','discount'];
	
}