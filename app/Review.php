<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function Student(){
        return $this->belongsTo('App\Car', 'car_id');

    }
}
