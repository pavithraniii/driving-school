<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complains extends Model
{
    protected $fillable=['name','complain'];

    //complains has relationship with user 
    //complain eka aithi user

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function reply(){
        return $this->hasMany('App\replies');
    }
}
