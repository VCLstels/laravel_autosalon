<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::get();
        return view('pages.catalog', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('pages.detail', compact('car'));
    }
}
