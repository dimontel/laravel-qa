<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
protected $fillale = ['title', 'body'];
    public function user() 
{
    return $this->belongTo(User::class);
}


}
