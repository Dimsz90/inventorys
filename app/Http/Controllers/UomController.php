<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uom;

class uomController extends Controller
{
    

public function index()
    {
        $uom = uom::all();
        return view('uoms.index', compact('uom'));
    }
    public function create()
    {
        return view('uoms.create');
    }
    public function store(Request $request)
    {
        uom::create($request->all());
        return redirect()->route('uom');
    }
    public function edit($id)
    {
        $uom = uom::findOrFail($id);
        return view('uoms.edit', compact('uom'));
    }
    public function update(Request $request,$id)
    {
        $uom = uom::findOrFail($id);

        $uom->update($request->all());
        return redirect()->route('uom');
    }
    public function destroy(Request $request,$id)
    {
        $uom = uom::findOrFail($id);

        $uom->delete($request->all());
        return redirect()->back();
    }

}
