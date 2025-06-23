<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomationsController extends Controller
{
    public function index()
    {
        return view('dashboard.automations');
    }
}
