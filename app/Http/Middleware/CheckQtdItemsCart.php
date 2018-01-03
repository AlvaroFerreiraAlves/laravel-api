<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;

class CheckQtdItemsCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cart = new Cart();
        if($cart->totalItems()<1){
            return redirect()->back()->with('message','Não há itens no carrinho de compras');
        }
        return $next($request);
    }
}
