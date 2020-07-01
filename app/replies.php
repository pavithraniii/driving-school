<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class replies extends Model
{
    
    protected $fillable=['complain_id','reply'];

    public function complain(){
        return $this->belongsTo('App\complains');
    }
}
