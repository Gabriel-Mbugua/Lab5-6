<?php

namespace App\Http\Controllers;

use App\Car;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function allReviews(){
        //read all cars
        $review = Review::all();
        return view('review',['reviews' => $review]);
    }

    public function index(){
        return view('newreview');
    }

    public function newReview(){
        $this->validate(request(), [
            'car_id'=>'required',
            'body'=>'required'
        ]);

//        $car = Car::where('car_id', request('car_id'))->firstOrFail();

        $review = new Review;
        $review->body = request('body');
//      $review->car_id = $car->id;
        $review->car_id = request('car_id');
        $review->save();

        return view('newreview');
    }
}
