<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests;
use App\Mug;
use Illuminate\Http\Request;
use Session;


class MugsController extends Controller
{
    public function getIndex()
    {
        $mugs = Mug::all();
        return view('shop.mugs', ['mugs' => $mugs]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $mug = Mug::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($mug, $mug->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));     //to view the session (cart object)
        return redirect()->route('mug.index');

    }
}
