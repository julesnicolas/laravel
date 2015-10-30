@extends('layouts.master')

@section('content')
  @foreach($posts as $post)
    <h1>
      <a href="{{ url('post', [$post->id, $post->slug]) }}">
        {{ $post->title }}
      </a>
    </h1>
    <small>{{ $post->published_at }}</small>

    <p>{{ str_limit($post->content, $limit = 90, $end = '...') }}</p>
    <p>{{$post->comments? $post->comments->count(): 0}}</p>
    @endforeach
@endsection