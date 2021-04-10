<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Many to Many Reverse
    public function ReverseMany(){
        return $this->belongsToMany('App\models\User');
    }
}
