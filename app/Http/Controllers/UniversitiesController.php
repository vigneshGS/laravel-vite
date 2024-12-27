<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    
    public function university()
    {
        return view('universities/colleges');
    }

    public function programs()
    {
        return view('universities/programs');
    }
    

}
