<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store.home.index');
    }

    public function cart()
    {
        $title = "Meu Carrinho de Compras";
        return view('store.cart.cart',compact('title'));
    }
}
