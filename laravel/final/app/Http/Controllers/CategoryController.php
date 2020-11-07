<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::all();
        return view('admin.category.all')->with('cats',$cat);
    }
    public function create()
    {
        return view('admin.category.create');

    }

    public function edit($id)
    {
        $cat = Category::findOrFail($id);

        return view('admin.category.edit')->with('cat',$cat);
    }
    public function insert(Request $request)
    {
        $cat = new Category();

        $cat->name = $request->cname;
        $cat->description = $request->desc;

        $cat->save();

        return redirect()->route('category');

    }
    public function update(Request $request)
    {
        $id = $_GET['id'];
        $cat = Category::findOrFail($id);

        $cat->name = $request->cname;
        $cat->description = $request->desc;

        $cat->save();

        return redirect()->route('category');
    }

    public function delete($id)
    {
        $cat = Category::findOrFail($id);

        $cat->delete();

        return redirect()->back();
    }
}
