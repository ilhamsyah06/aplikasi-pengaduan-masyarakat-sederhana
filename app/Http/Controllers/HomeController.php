<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laundry;

class HomeController extends Controller
{
    public function inputdata()
    {
        $datalaundry = Laundry::take(1)->get();
        return view('inputdata.inputdata', compact('datalaundry'));
    }
}
