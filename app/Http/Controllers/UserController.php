<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $title = "Meu perfil";
        return view('store.user.profile', compact('title'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
