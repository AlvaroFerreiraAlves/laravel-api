<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function index(Product $product)
    {
        $products=$product->all();
        return view('store.home.index',compact('products'));
    }

    public function cart()
    {
        $title = "Meu Carrinho de Compras";


        $cart = new Cart();
        dd($cart->getItems());

        return view('store.cart.cart',compact('title'));
    }
}
