@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('brand.update', $brand->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Nama Brand</label>
                <input type="text" name="name" id="" value="{{$brand->name}}" class="form-control">
            </div>
            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('brands')}}" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
@endsection
