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
}
