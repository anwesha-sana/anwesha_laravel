<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //one to one relation
    public function getResult(){
        return $this->hasOne('App\models\UserDetails','fk_user_id','id');
        #return $this->hasOne('target model path','f_key','p_key');
    }

    //one to many 
    public function getPhoneModel(){
        return $this->hasMany('App\models\Phone','user_id','id');
        #return $this->hasMany('target model path','f_key','p_key');
    }

    //Many to Many 
    public function ManytoMany(){
        return $this->belongsToMany('App\models\Role');
    }
}
