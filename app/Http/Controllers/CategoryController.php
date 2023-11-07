<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    

public function index()
    {
        $category = Category::all();
        return view('categorys.index', compact('category'));
    }
    public function create()
    {
        return view('categorys.create');
    }
    public function store(Request $request)
    {
        Category::create($request->except('_token'));
        return redirect()->route('category');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categorys.edit', compact('category'));
    }
    public function update(Request $request,$id)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all());
        return redirect()->route('category');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }

}
