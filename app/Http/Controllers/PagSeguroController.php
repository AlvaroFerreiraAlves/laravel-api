<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PagSeguro;

class PagSeguroController extends Controller
{
    public function pagseguro(PagSeguro $pagseguro)
    {
        $code = $pagseguro->generate();
        
        $urlRedirect = config('pagseguro.url_redirect_after_request').$code;
        
        return redirect()->away($urlRedirect);
    }
    
    public function lightbox()
    {
        return view('pagseguro-lightbox');
    }
    
    public function lightboxCode(PagSeguro $pagseguro)
    {
        return $pagseguro->generate();
    }
    
    public function transparente()
    {
        return view('pagseguro-transparente');
    }
    
    public function getCode(PagSeguro $pagseguro)
    {
        return $pagseguro->getSessionId();
    }
    
    public function billet(Request $request, PagSeguro $pagseguro, Order $order, Cart $cart)
    {
        $response = $pagseguro->paymentBillet($request->sendHash);

        $order->newOrderProducts($cart, $response['reference'], $response['code']);
        $cart->emptyCart();

        return $response;

       /* return $pagseguro->paymentBillet($request->sendHash);*/
    }
    
    public function card()
    {
        return view('pagseguro-transparent-card');
    }
    
    public function cardTransaction(Request $request, PagSeguro $pagseguro)
    {
        return $pagseguro->paymentCredCard($request);
    }
}