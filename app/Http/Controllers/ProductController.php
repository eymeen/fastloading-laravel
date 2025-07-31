<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the product page.
     */
    public function index()
    {
        return view('product');
    }
}
