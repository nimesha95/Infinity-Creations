<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }
}
