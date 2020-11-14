<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = DB::table('product')
        ->join('category','category.id','=','product.category_id')
        ->select('product.*','category.name as cname')->whereNull('deleted_at')->get();
        /* select * from product join category on product.category_id=category.id */
        return view('admin.product.all')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.product.create')->with('cats',$cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->pname;
        $product->price = $request->price;
        //$product->image = $request->img;
        $product->description = $request->desc;
        $product->category_id = $request->cat;

        $img = $request->img;

        $img_name = time().$img->getClientOriginalName();

        $img->move('upload/product',$img_name);

        $product->image = 'upload/product/'. $img_name;



        $product->save();


        return redirect()->route('all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $cat = Category::all();
        return view('admin.product.edit')->with('product',$product)->with('cats',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->pname;
        $product->price = $request->price;

        $product->description = $request->desc;
        $product->category_id = $request->cat;

        $product->save();


        return redirect()->route('all');

    }


    public function restore($id)
    {
        $product = Product::onlyTrashed($id)->first();

        $product->restore();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::onlyTrashed($id)->first();

        $product->forceDelete();

        return redirect()->back();

    }
    public function trashed()
    {
        $products = DB::table('product')
        ->join('category','category.id','=','product.category_id')
        ->select('product.*','category.name as cname')->whereNotNull('deleted_at')->get();

        return view('admin.product.trashed')->with('products',$products);
    }
    public function trash($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
