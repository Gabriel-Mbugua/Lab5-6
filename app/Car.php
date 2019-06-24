<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    public function Review(){
        return $this->hasMany('App\Review', 'car_id');

    }
}
