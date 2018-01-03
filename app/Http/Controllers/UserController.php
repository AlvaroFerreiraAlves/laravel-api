<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $title = "Meu perfil";
        return view('store.user.profile', compact('title'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function profileUpdate(Request $request, User $user)
    {

        $this->validate($request, $user->rulesUpdateProfile());

        $dataForm = $request->all();

        if (isset($dataForm['email']))
            unset($dataForm['email']);
        if (isset($dataForm['cpf']))
            unset($dataForm['cpf']);

        $update = Auth::user()->profileUpdate($dataForm);

        if ($update)
            return redirect()->route('profile')->with('message', 'Perfil atualizado com sucesso');
        else
            return redirect()->route('profile')->with('error', 'Falha ao atualizar');
    }

    public function password()
    {
        $title = 'Minha senha';

        return view('store.user.password', compact('title'));
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, ['password' => 'required|string|min:6|confirmed']);

        $update = Auth::user()->updatePassword($request->password);

        if ($update)
            return redirect()->route('password')->with('message', 'Senha atualizada com sucesso');
        else
            return redirect()->route('password')->with('error', 'Falha ao atualizar');
    }
}
