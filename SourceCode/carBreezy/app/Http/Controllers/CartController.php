<?php

namespace App\Http\Controllers;
use App\Repository\CartRepos;
use App\Repository\CarRepos;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart = CartRepos::getAllCart();
        $car =CarRepos::getAllCar();
        return view('normal.cart',
            [
                'cart'=>$cart,
                'car'=>$car
            ]);
    }
}
