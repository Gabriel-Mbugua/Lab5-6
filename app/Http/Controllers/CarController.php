<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allCars(){
        //read all cars
        $cars = Car::all();
        return view('allcars',['cars' => $cars]);
    }

    public function particularcar($id){
        //read a particular car identified by id
        $cars = Car::find($id);
    }

    public function index(){
        return view('newcar');
    }

    public function newCar(){
        //create a new Car
        $this->validate(request(),[
            'make' => 'required',
            'model' => 'required',

        ]);

        $car= new Car;
        $car->make = request('make');
        $car->model = request('model');
        $car->produced_on = request('produced_on');
        $car->save();

        return view('newcar');
    }
}
