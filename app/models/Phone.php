<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //One to Many 
    public function PhonewiseUser(){

        return $this->belongsTo('App\models\User','user_id','id');
        #return $this->belongsTo('target model path','f_key','p_key');
    }
}
