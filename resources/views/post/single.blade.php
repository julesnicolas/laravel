@extends('layouts.master')

@section('content')
  <h1>{{ $post->title }}</h1>
  <small>{{ $post->published_at }}</small>

  <p>{{ $post->content }}</p>

@include('comment.comment')

@endsection