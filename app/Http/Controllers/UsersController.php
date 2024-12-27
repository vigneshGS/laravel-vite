<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function  profiles()
    {
        return view('users/profiles');
    }

    public function permissions()
    {
        return view('users/permissions');
    }
    
    public function addUser()
    {
        return view('users/addUser');
    }
    
    public function usersGrid()
    {
        return view('users/usersGrid');
    }

    public function usersList()
    {
        return view('users/usersList');
    }
    
    public function viewProfile()
    {
        return view('users/viewProfile');
    }
}
