@extends('layout')
@section('content')
    <div class="container">
        <h2 style="text-align:center">Sample Posts</h2>
        @foreach ($posts as $post)
            <div class="card mb-3 mt-3">
                <div class="card-header">
                    <h1 style="text-align: center">Posts</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection
