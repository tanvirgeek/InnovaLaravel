<?php

namespace App\Http\Controllers;

use App\PdfFile;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('maintenance.index');
    }

    public function tools()
    {
        $pdfs = PdfFile::orderBy('id', 'DESC')->take(2)->get();
        return view('maintenance.tools', compact('pdfs'));
    }

    public function services()
    {
        return view('maintenance.services');
    }
}
