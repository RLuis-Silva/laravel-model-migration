<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// importo la classe 'Car'
use App\Car;

class HomeController extends Controller
{
    public function index(){
       
        // prendo tutti i dati della tabella 'cars'
        $cars = Car::all();
        dd($cars);

        // per passare i dati all view --> compact()
        return view('home', compact('cars'));
    }
}
