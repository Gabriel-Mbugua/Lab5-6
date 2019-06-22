<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function Fees(){
        return $this->hasMany('App\Review', 'car_id');

    }
}
