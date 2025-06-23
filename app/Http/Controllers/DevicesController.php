<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index() // Changed method name for clarity
    {
        return view('devices.index'); // Pointing to the new path
    }

    public function create() // New method for the create form
    {
        return view('devices.create');
    }
}
