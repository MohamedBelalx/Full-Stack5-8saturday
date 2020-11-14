<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Product;
class IndexController extends Controller
{
    public function index()
    {
        $latest = DB::table('product')->whereNull('deleted_at')->orderBy('id','desc')->limit(6)->get();
        $sample = DB::table('product')->whereNull('deleted_at')->orderBy('id')->limit(4)->get();
        $highest = DB::table('product')->whereNull('deleted_at')->orderBy('price','desc')->limit(4)->get();
        $lowest = DB::table('product')->whereNull('deleted_at')->orderBy('price')->limit(4)->get();
        //dd($latest);
        return view('user.index')
        ->with('latest',$latest)
        ->with('samples',$sample)
        ->with('highest',$highest)
        ->with('lowest',$lowest);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('user.show')->with('product',$product);
    }
    public function showAll()
    {
        $products = DB::table('product')->whereNull('deleted_at')->paginate(12);
        
        return view('user.all')->with('products',$products);
    }
    // search handle


    public function search(Request $request)
    {
        $word = $request->key;


        $products = DB::table('product')
        ->whereNull('deleted_at')
        ->where('name','LIKE','%'.$word.'%')
        ->get();

        //dd($products);
        return view('user.search')->with('products',$products);
    }
}
