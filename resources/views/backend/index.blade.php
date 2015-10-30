@extends('layouts.dashboard')

@section('content')
  @foreach($posts as $post)
    <h1>
      <a href="{{ url('post', [$post->id, $post->slug]) }}">
        {{ $post->title }}
      </a>
    </h1>
    <p>{{ str_limit($post->content, $limit = 90, $end = '...') }}</p>
    <small>{{ $post->published_at }}</small>
    <br>
    <br>
    <a href="{{route('backend.edit', $post)}}">Edit</a>

    @endforeach
@endsection