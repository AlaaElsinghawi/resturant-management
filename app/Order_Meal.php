<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Meal extends Model
{
    //
    protected $table='order_meal';
    public $fillable=['order_id' ,'meal_id' ,'number_meal'];
    
}
