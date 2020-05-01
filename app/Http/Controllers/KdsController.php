<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KdsController extends Controller
{
    public function index()
    {
        return view('systems.kds');
    }
}
