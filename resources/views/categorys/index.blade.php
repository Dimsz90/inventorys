@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Buat category Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
               <th>Nama</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($category as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>
            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="{{ route('category.destroy', $item->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="2">Maaf Data Brand belum tersedia</td>
    </tr>
@endforelse
      
        </tbody>        
    </table>
</div>
@endsection