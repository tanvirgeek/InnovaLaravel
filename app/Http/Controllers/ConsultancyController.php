<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    public function index()
    {
        return view('consultancy.index');
    }

    public function electrical()
    {
        return view('consultancy.electrical');
    }

    public function mechanical()
    {
        return view('consultancy.mechanical');
    }

    public function workReference()
    {
        return view('consultancy.work-reference');
    }
}
