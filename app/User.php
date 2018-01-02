<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf','street','number','complement','district','postal_code','city','state','country','phone','area_code','birth_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function rules()
    {
        return [
            'name'          => 'required|string|min:3|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
            'cpf'           => 'required|unique:users',
            'birth_date'    => 'required',
            'street'        => 'required',
            'number'        => 'integer|required',
            'complement'    => 'max:200',
            'postal_code'   => 'integer|required',
            'city'          => 'required',
            'state'         => 'required',
            'country'       => 'required',
            'area_code'     => 'integer|required',
            'phone'         => 'required|integer',
        ];
    }
}
