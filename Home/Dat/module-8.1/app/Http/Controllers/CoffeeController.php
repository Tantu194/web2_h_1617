<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Module8;

class CoffeeController extends Controller
{
    public function index(){
        $obj = new Module8();
        
        $items = $obj->getAllItem();
        $itemsBreak = $obj->getItemBreakfast('Breakfast');
        $itemsBruch = $obj->getItemBreakfast('Brunch');
        $itemsDinner = $obj->getItemBreakfast('Dinner');
        $itemsLunch = $obj->getItemBreakfast('Lunch');
        $itemsDessert = $obj->getItemBreakfast('Dessert');
        $itemsDrinks = $obj->getItemBreakfast('Drinks');
        $data = array(
            'items' => $items,
            'itemsBreak' => $itemsBreak ,
            'itemsBruch' => $itemsBruch ,
            'itemsDinner' => $itemsDinner,
            'itemsLunch' => $itemsLunch,
            'itemsDessert' => $itemsDessert,
            'itemsDrinks' => $itemsDrinks
        );
        return view('coffee.index',$data);
    }
}

