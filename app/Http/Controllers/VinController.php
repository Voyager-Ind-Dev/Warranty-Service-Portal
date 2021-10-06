<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VinController extends Controller
{
    public function index()
    {
        return view('vin-services');
    }
}
