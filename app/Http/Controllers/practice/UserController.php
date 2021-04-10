<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User ;
use App\models\UserDetails ;
use App\models\Phone ;
use App\models\Role;
use App\models\Supplier;


class UserController extends Controller
{
    /************ One To One ****************/
    public function OneToOne(){
        #$result = User::with('getResult')->get()->toArray();
        $result = User::where('is_active',1)->with('getResult')->get()->toArray();
        dd($result); 
    }
    /************ Belongs To (One to one reverse) ****************/
    public function belonsto(){
        $result = UserDetails::with('getUser')->get()->toArray();
        dd($result); 
    }
    /******************** One To Many ****************/
    public function OneMany(){
        $result_many = User::with('getPhoneModel')->get()->toArray();
        dd($result_many); 
    }

    /******************* One To Many (Reverse) *********************/
    public function OneManyReverse(){
        $result_many = Phone::with('PhonewiseUser')->get()->toArray();
        dd($result_many); 
    }

    /******************* Many To Many *********************/
    public function ManyToMany(){
        $result_many = User::with('ManytoMany')->get()->toArray();
        dd($result_many); 
    }

    /******************* Many To Many(Reverse) *********************/
    public function ManyToReverse(){
        $result_many = Role::with('ReverseMany')->get()->toArray();
        dd($result_many); 
    }
    /***************** Has one through*******************/
    public function HasOneThrough(){
        $result = Supplier::with('userHistory')->get()->toArray();
        dd($result);
    }



    
}
