@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
           
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" id="" value="{{$product->price}}" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Part Number</label>
                <input type="text" name="Part_number" id="" value="{{$product->Part_number}}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="Description" id="" value="{{$product->Description}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="number" name="Category_id" id="" value="{{$product->Category_id}}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Brand ID</label>
                <input type="number" name="Brand_id" id="" value="{{$product->Brand_id}}" class="form-control" readonly >
            </div>
            <div class="form-group">
                <label for="">UOM ID</label>
                <input type="number" name="Uom_id" id="" value="{{$product->Uom_id}}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Remarks</label>
                <input type="text" name="remarks" id="" value="{{$product->remarks}}" class="form-control">
            </div>

            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('product')}}" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
@endsection
