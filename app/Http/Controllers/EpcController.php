<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpcController extends Controller
{
    public function index()
    {
        return view('epc.index');
    }

    public function hvac()
    {
        return view('epc.hvac');
    }

    public function fireSafty()
    {
        return view('epc.fire-safety');
    }

    public function processPiping()
    {
        return view('epc.process-piping');
    }
}
