@extends('frontend.layouts.master')

@section('main-content')
    <div>
        @foreach ($posts as $post)
            <div class="card">
                <h2>{{$post->title}}</h2>
                <div class="card-body">
                <a href="{{route('categories.index', $post->category->id)}}"><mark>{{$post->category->name}}</mark></a>
                    
                {!! $post->description !!}
                <a href="{{route('posts.show', $post->id)}}">View More</a>
                </div>
                
            </div>
            <hr>
        @endforeach
    </div>
    
@endsection

<!-- @section('end-content')
    <p>dynamic end content from test file</p>
@endsection -->
