@extends('layout')

@section('content')
<div class="container">
    <div class="index-header fade-in-up">
        <h1 class="index-title">📚 Daftar Post</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">➕ Tambah Post Baru</a>
    </div>
    
    <div class="card fade-in-up">
        @if($posts->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th> Judul</th>
                        <th class="text-center"> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>
                            <div class="font-medium">{{ $post->title }}</div>
                            <div class="text-sm text-gray-600">{{ Str::limit($post->content, 100) }}</div>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus post ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center py-8">
                <div class="text-6xl mb-4">📝</div>
                <h3 class="text-2xl font-bold mb-2">Belum ada post</h3>
                <p class="text-gray-600 mb-4">Mulai menulis post pertama Anda!</p>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">➕ Buat Post Pertama</a>
            </div>
        @endif
    </div>
</div>
@endsection