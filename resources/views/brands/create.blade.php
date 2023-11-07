@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('brands.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Brand</label>
                <input type="text" name="name" id="" class="form-control" required>
            </div>
            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success"  >Simpan</button>
                <a href="{{route('brands')}}" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
@endsection
