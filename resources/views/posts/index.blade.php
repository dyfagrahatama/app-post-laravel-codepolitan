@extends('layouts.app')

@section('content')
    {{-- body --}}
    <div class="container">
        <h1 class="title"><u>BLOG - REFDEV</u></h1>
        <hr>
        <a href="{{ url('post/create') }}" class="btn btn-primary">Tambah </a>
        @foreach ($post as $row)
            <div class="card mb-3 mt-5" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/blog.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{{ $row->content }}</p>
                            <p class="card-text"><small class="text-muted">Last Update
                                    {{ date('d M Y H:i', strtotime($row->created_at)) }}</small></p>
                            <a href="{{ url("post/$row->id") }}" class="btn btn-success">Selengkapnya</a>
                            <a href="{{ url("post/$row->id/edit") }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
