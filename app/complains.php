<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complains extends Model
{
    //table name
    protected $table='complains';
    //primary key
    public $primarykey='id';
    //time stamp
    public $timestamps=true;

    //complains has relationship with user 
    //complain eka aithi user

    public function user(){
        return $this->belongsTo('App\User');
    }
}
