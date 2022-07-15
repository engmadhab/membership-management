@extends('frontend.layouts.master')

@section('main-content')
    <div>
        <h2>{{$post->title}}</h2>
        {!! $post->description !!}
        <br>
        <hr>
        @foreach ($post->tags as $tag)
            <mark>{{$tag->name}},</mark>
        @endforeach
        <hr>
        <h4>Comments</h4>

            @foreach ($post->comments as $comment )
                <br>                
                <p>{{$comment->comment}}</p>
                <p>-by {{$comment->user->name}}</p>
                 <p>At - {{$comment->created_at->diffForHumans()}}</p>
            @endforeach
    </div>
    
@endsection

