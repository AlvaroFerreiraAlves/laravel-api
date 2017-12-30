<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{

    private $items = [];

    public function __construct()
    {
        if(Session::has('cart')){
            $cart = Session::get('cart');

            $this->items = $cart->items;
        }
    }

    public function add(Product $product)
    {

        $this->items[$product->id] = [
            'item' => $product,
            'qtd' => 1,
        ];

    }

    public function getItems()
    {
        return $this->items;
    }
}
