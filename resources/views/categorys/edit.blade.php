@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('category.update', $category->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Nama category</label>
                <input type="text" name="name" id="" value="{{$category->name}}" class="form-control">
            </div>
            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{route('category')}}" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
@endsection
