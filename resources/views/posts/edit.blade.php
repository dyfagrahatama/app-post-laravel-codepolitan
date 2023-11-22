@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 20px;">Edit Postingan</h2>
        <hr>

        <form action="{{ url("post/$post->id") }}" method="POST" class="form-control">
            @csrf
            @method('PATCH')
            <div>
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" name="title" id="title" required value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content :</label>
                <input type="text" class="form-control" name="content" id="content" required
                    value="{{ $post->content }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
