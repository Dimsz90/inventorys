<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Uom;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class productController extends Controller
{
    

public function index()
    {
        $product = product::all();
        return view('products.index', compact('product'));
    }
    public function create()
    {
        $category = Category::all();
        $brand = Brand::all();
        $uom = Uom::all();
        return view('products.create', compact('category', 'brand', 'uom'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|file|max:5000',  
        ]);
    
        $input = $request->all();
    
        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image')->getRealPath())->resize(150, 150);
            $path = 'public/images/' . $request->file('image')->hashName();
            Storage::put($path, (string) $image->encode());
            $input['image'] = $path;
        }

    
        product::create($input);
    
        return redirect()->route('product');
    }
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
{
    $product = product::findOrFail($id);
    $input = $request->all();

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/images');
        $input['image'] = $path;
    }

    $product->update($input);

    return redirect()->route('product');
}
public function destroy(Request $request,$id)
{
    $product = Product::findOrFail($id);

    
    if(\File::exists(public_path($product->image)))
    {
        \File::delete(public_path($product->image));
    }

    $product->delete();
    return redirect()->back();
}
public function validateRequest(){
    return tap(request()->validate([
        'category_id'  => 'required',
        'brand_id'     => 'required',
        'uom'          => 'required',
        'part_number'  => 'required',
        'descriptions' =>  'required',
        'move_type'    =>  'required',
        'price'        =>  'required',
        'currency'     =>  'required',
        'remarks'      =>  'required',
        // Hanya menerima file gambar dengan format jpeg, png, bmp, atau gif
        'images'       => 'required|image|mimes:jpeg,bmp,gif|max:5000',
    ]), function(){
        if(request()->hasFile('images')){
            request()->validate([
                // Hanya menerima file gambar dengan format jpeg,  bmp, atau gif
                'images'    => 'required|image|mimes:jpeg,bmp,gif|max:5000',
            ]);
        }
    });
}


}
