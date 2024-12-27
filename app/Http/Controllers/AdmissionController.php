<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Monolog\Handler\FingersCrossed\ActivationStrategyInterface;

class AdmissionController extends Controller
{
    public function admission()
    {
        return view('admission/admission');
    }
    public function activity()
    {
        return view('admission/activity');
    }
   
}
