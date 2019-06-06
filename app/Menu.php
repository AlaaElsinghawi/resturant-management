<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public function user()
      {
    return $this->BelongsTo('App\User');
      }
    public function items()
    {
    	return $this->hasMany('App\Item');
    } 
}
