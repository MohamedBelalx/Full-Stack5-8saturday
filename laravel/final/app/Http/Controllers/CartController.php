<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Stripe\Stripe;
use Stripe\Charge;
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

    // payment
    public function payment(Request $request)
    {
        Stripe::setApiKey('sk_test_LjOUxYxRY0dGwx6GgF3on61R008uWX4wOe');

        Charge::create([
            'amount' => Cart::subtotal() * 100,
            'currency' => 'usd',
            'receipt_email' => $request->email,
            'source' => $request->stripeToken
        ]);



        Cart::destroy();


        return redirect()->back();
    }
}
