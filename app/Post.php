<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id',
    ];

    protected $table='posts';
    public function user(){ 
    	return $this->belongsTo(User::class,'user_id'); 
    } 

}
