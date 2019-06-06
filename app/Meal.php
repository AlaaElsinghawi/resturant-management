<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model{
     public $table='meals';
    public $fillable=['title','status','description','image','price','user_id'];
    public function items()
    {return $this->belongsToMany('App\Item','Meal_Item');}
}
