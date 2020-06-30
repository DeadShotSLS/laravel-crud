<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		'name','description','price','image','user_id','c_id'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function category(){
        return $this->belongsTo('App\Model\Category','c_id');
    }
}
