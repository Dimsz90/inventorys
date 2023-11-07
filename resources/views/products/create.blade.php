@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Part Number</label>
            <input type="text" name="Part_number" id="" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="Category_id" id="" class="form-control">
                @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Brand</label>
            <select name="Brand_id" id="" class="form-control">
                @foreach ($brand as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Uom</label>
            <select name="Uom_id" id="" class="form-control">
                @foreach ($uom as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Move Type</label>
            <select name="Type" id="" class="form-control">
                <option value="Fast">Fast</option>
                <option value="Slow">Slow</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="currency" id="" class="form-control" placeholder="currentcy.....">
                </div>
                <div class="col-md-6">
                    <input type="number" name="price" id="" class="form-control" placeholder="price">
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Remarks</label>
            <input type="text" name="remarks" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descriptions</label>
            <input type="text" name="Description" id="" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{route('category')}}" class="btn btn-primary">cancel</a>
        </div>
    </form>
</div>
@endsection
