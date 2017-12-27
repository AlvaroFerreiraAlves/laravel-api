<?php

namespace App\Http\Controllers;

use App\Models\PagSeguro;
use Illuminate\Http\Request;

class PagSeguroController extends Controller
{
    public function pagseguro(PagSeguro $pagSeguro)
    {
        $code = $pagSeguro->generate();
        $urlRedirect = config('pagseguro.url_redirect_after_request') . $code;

        return redirect()->away($urlRedirect);
    }

    public function lightbox()
    {
        return view('pagseguro-lightbox');
    }

    public function lightboxCode(PagSeguro $pagSeguro)
    {
        return $pagSeguro->generate();
    }

    public function transparente()
    {
        return view('pagseguro-transparente');
    }

    public function getCode(PagSeguro $pagSeguro)
    {
        return $pagSeguro->getSessionId();
    }

    public function billet(Request $request, PagSeguro $pagSeguro)
    {
        return $pagSeguro->paymentBillet($request->sendHash);
    }

    public function card(Request $request, PagSeguro $pagSeguro)
    {
        return view('pagseguro-transparente-card');
    }

    public function cardTransaction(Request $request, PagSeguro $pagSeguro)
    {
        return $pagSeguro->paymentCredcard($request);
    }
}
