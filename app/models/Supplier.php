<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     /**
     * Get the user's history.
     */
    public function userHistory()
    {
        return $this->hasOneThrough('App\models\History', 'App\models\User', 'supplier_id','user_id','id','id');
    }
}
?>