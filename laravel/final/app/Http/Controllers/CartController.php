<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CartController extends Controller
{
    public function index()
    {
        //dd(Cart::content());
        return view('user.cart.index');
    }
    public function add(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1,
            'weight' => 0,
            'options' => ['image'=> $product->image]
        ]);

        return redirect()->back();
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function reset()
    {
        Cart::destroy();
        return redirect()->back();
    }
}
