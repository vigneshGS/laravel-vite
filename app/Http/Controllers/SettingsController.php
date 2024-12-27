<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function commissions()
    {
        return view('settings/commissions');
    }
    
    public function payment()
    {
        return view('settings/payment');
    }
}
