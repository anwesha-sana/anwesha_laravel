<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_information' ; 

    public function getUser(){
        return $this->belongsTo('App\models\User','fk_user_id','id');
    }
}
