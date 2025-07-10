@extends('layout')

@section('content')
<div class="container">
    <div class="header fade-in-up">
        <h1>Edit Post</h1>
        <p>Perbarui konten Anda</p>
    </div>
    
    <div class="form-container fade-in-up">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-input" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Konten</label>
                <textarea name="content" class="form-textarea" required>{{ $post->content }}</textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Post</button>
                <a href="{{ route('posts.index') }}" class="btn btn-third">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection