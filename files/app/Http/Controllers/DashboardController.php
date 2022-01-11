<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function theme($theme)
    {
        //
    }
    public function welcome() {
        return view('dashboard.welcome.admin');
    }
}
