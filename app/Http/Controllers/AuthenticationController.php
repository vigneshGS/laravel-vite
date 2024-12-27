<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('authentication/forgotPassword');
    }

    public function signIn()
    {
        return view('authentication/signIn');
    }

    public function signUp()
    {
        return view('authentication/signUp');
    }
}
