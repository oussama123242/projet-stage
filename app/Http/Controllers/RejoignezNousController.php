<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RejoignezNousController extends Controller
{
    public function index()
    {
        return view('apply');
    }
}
