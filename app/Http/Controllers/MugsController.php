<?php

namespace App\Http\Controllers;

use App\Mug;

class MugsController extends Controller
{
    public function getIndex()
    {
        $mugs = Mug::all();
        return view('shop.mugs', ['mugs' => $mugs]);
    }
}
