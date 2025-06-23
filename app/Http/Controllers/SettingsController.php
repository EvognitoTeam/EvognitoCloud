<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function index()
    {
        // dd(Session::get('locale'));
        return view('dashboard.settings');
    }

    public function setLocale(Request $request)
    {
        $locale = $request->input('locale');
        if (in_array($locale, ['en', 'id'])) {
            session(['locale' => $locale]);
        }

        return redirect()->back()->with('status', 'messages.language_changed');
    }
}
