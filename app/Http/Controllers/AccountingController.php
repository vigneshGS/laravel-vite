<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function invoice()
    {
        return view('accounting/invoice');
    }

    public function ledger()
    {
        return view('accounting/ledger');
    }

   
}
