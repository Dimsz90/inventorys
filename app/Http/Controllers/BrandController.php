<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class brandController extends Controller
{
    

public function index()
    {
        $brand = Brand::all();
        return view('brands.index', compact('brand'));
    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        Brand::create($request->all());
        return redirect()->route('brands');
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }
    public function update(Request $request,$id)
    {
        $brand = Brand::findOrFail($id);

        $brand->update($request->all());
        return redirect()->route('brands');
    }
  public function destroy($id)
{
    $brand = Brand::findOrFail($id);

    $brand->delete();
    return redirect()->back();
}

}
