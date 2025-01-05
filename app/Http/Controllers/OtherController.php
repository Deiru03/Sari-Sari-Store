<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class OtherController extends Controller
{
    public function dashboard(): View
    {
        $totalProducts = Product::count();

        return view("dashboard", ["totalProducts"=> $totalProducts]);
    }
}
