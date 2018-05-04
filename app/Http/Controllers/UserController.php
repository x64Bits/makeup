<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
    	/*se retorna el formulario simple que solo pide una contraseña*/
    	return view('auth.login');
    }
}
