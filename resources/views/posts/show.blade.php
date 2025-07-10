@extends('layout')

@section('content')
<div class="container">
    <div class="post-detail fade-in-up">
        <h1 class="post-title">{{ $post->title }}</h1>
        
        <div class="post-meta mb-4">
            <span class="text-gray-500">📅 {{ $post->created_at->format('d F Y') }}</span>
            @if($post->updated_at != $post->created_at)
                <span class="text-gray-500 ml-4">Diperbarui: {{ $post->updated_at->format('d F Y') }}</span>
            @endif
        </div>
        
        <div class="post-content">
            {!! nl2br(e($post->content)) !!}
        </div>
        
        <div class="flex justify-between items-center mt-6 pt-6 border-t">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus post ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection