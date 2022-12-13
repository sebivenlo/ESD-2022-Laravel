<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarValidation;
use App\Models\Car;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarController extends Controller
{

    public function index() {
        //TODO Use Eloquent to gather all cars and pass them to the Vue page below.
        //TIP Use the Car model.
        return Inertia::render('Cars/Overview', [
            'cars' => [],
        ]);
    }

    public function create() {
        return Inertia::render('Cars/Create');
    }
    
    //TODO Finish the CreateCarValidation, use the database table for reference.
    public function store(CreateCarValidation $request) {
        //TODO Use Eloquent to create and save a new car in the database and return the user to the cars list.
        //TIP Work inside a database transaction to avoid data inconsistency. https://laravel.com/docs/9.x/database#database-transactions

    }

    public function edit($carId) {
        //TODO return a specific car based on the parameter passed to the frontend.
        return Inertia::render('Cars/Edit', [
            'car' => "Replace this string with the solution!",
        ]);
    }

    public function update(Request $request, $carId) {
        //TODO Write a databse transaction and save the passed data to the  database
        //Return the user to the cars list.

    }

    public function apiGetCar($carId) {
        return Car::where('id', $carId)->exists() ? response()->json(Car::find($carId)) :
            throw new HttpResponseException(response()->json('Car not found', 404));
    }
}
