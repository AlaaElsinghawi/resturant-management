<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	 /*public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['id_city', 'name', 'email', 'password', 'admin'];
    protected $hidden = ['password', 'remember_token'];*/
 protected $table = 'items';
 public $fillable=['id','title','description','status','image','price','menu_id','user_id']; 
 public function menus() 
    {
    	
 return $this->belongsTo('App\Menu','menu_id');

    }   
     

}
