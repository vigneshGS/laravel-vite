<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function leads()
    {
        return view('promo/leads');
    }
    
    public function referals()
    {
        return view('promo/referals');
    }

}
