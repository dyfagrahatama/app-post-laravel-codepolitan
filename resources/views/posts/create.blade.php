@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 20px;">Input Postingan Terbaru</h2>
        <hr>

        <form action="{{ url('post') }}" method="POST" class="form-control">
            @csrf
            <div>
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content :</label>
                <input type="text" class="form-control" name="content" id="content" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
