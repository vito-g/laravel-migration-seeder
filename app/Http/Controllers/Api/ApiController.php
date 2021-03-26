<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coffee;

class ApiController extends Controller
{
    public function getFirstCoffee() {
      //Creare un Api che restituisce il primo caffè della tabella del database coffee
      // dd('prova');
      // $firstCoffee = Coffee::all(); //Salvo tutta la tab coffees in $firstCoffee
      $firstCoffee = Coffee::orderBy('id', 'asc')->first(); //Ritorno solo il primo caffè della tab del mio database
      return response()->json($firstCoffee);
    }
}
