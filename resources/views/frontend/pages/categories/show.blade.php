@extends('frontend.layouts.master')

@section('main-content')
    <div>
        <h2>{{$category->name}}</h2>
            @foreach ($category->posts as $post)
                <div class="card">
                    <h2>{{$post->title}}</h2>
                    <div class="card-body">
                        <mark>{{$post->category->name}}</mark>
                    {!! $post->description !!}                    
                    </div>
                    
                </div>
                <hr>
            @endforeach
    </div>
    
@endsection

<!-- @section('end-content')
    <p>dynamic end content from test file</p>
@endsection -->
