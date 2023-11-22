@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="title"><u>Halaman Detail Blog</u></h2>
        <hr>
        <article class="blog-post">
            <h4 class="blog-post-title">{{ $post->title }}</h4>
            <p class="blog-post-meta">Last Update {{ date('d M Y H:i', strtotime($post->created_at)) }}</p>
            <p>{{ $post->content }}</p>
            <small class="text-muted">{{ $total_comments }} komentar</small>

            @foreach ($comments as $row)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 10pt">{{ $row->comment }}</p>
                    </div>
                </div>
            @endforeach
            <hr>
            <a href="{{ url('post') }}" class="btn btn-warning">Kembali</a>
            <form method="POST" action="{{ url("post/$post->id") }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </article>
    </div>
@endsection
