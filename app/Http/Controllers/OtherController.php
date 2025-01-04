<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OtherController extends Controller
{
    public function dashboard(): View
    {
        return view("dashboard");
    }
}
