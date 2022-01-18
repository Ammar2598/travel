<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    protected $fillable=['destination','description','cost','image','category','duration'];

    public function cat(){

    return $this->belongsTo(\App\Models\Category::class);    	
    }

    public function des(){
    	
    return $this->belongsTo(\App\Models\Destination::class,'id');    	
    }
}
