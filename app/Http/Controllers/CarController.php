<?php

namespace App\Http\Controllers;

use App\Car;
use App\Review;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('newcar');
    }

    public function home(){
        return view('welcome');
    }

    public function allCars(){
        //read all cars
        $cars = Car::all();
        return view('allcars',['cars' => $cars]);
    }

    public function particularCar(){
        //read a particular car identified by id
        $search = request('query');
        $cars = Review::with('Car')->where('car_id', $search)->get();
        return view("particularcar", ['cars' => $cars]);
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
