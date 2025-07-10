@extends('layout')

@section('content')
<div class="container">
    <div class="header fade-in-up">
        <h1>Buat Post Baru</h1>
        <p>Tulis ide Anda di sini!</p>
    </div>
    
    <div class="form-container fade-in-up">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-input" placeholder="Masukkan judul yang menarik..." required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Konten</label>
                <textarea name="content" class="form-textarea" placeholder="Tulis konten Anda di sini..." required></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan Post</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection