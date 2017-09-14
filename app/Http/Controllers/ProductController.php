<?php

namespace App\Http\Controllers;

use App\Cart;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getReducedByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.Cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.Cart');


    }
}
