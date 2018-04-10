<?php

namespace App\Http\Controllers\API;

use App\Models\PagSeguro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPagseguroController extends Controller
{
    public function request(Request $request, PagSeguro $pagSeguro)
    {
        if(!$request->notificationCode){
            return response()->json(['erro'=>'NotNotificationCode'],404);
        }

        return $pagSeguro->getStatusTransaction($request->notificationCode);
    }


}
