<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use DB;

class PizzaController extends Controller
{
    public function ShowAll(){
        $pizzaList = DB::table('pizza')->get();
        return view('/pizzas', compact('pizzaList'));
    }
}
