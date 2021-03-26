<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getFirstCoffee() {
      //Creare un Api che restituisce il primo caffè della tabella del database coffee
      dd('prova');
    }
}
