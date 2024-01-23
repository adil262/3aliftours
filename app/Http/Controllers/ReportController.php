<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cash;
use App\capital;
use App\sales;
use App\puchase;

class ReportController extends Controller
{
    public function generalledger()
    {
        $report=cash::all();
        $total=cash::sum('price_tr');
        return view('report.generalledger', compact('report','total'));
    }
}
