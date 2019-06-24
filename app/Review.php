<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    public function Car(){
        return $this->belongsTo('App\Car', 'car_id');

    }
}
