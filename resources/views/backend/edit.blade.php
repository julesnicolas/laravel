@extends('layouts.dashboard')
@section('content')
    <h1>Editer un article</h1>
{!! Form::open(['method' => 'put', 'url' => route('backend.update', $post)]) !!}

{!! Form::label('title','Titre') !!}
{!! Form::text('title', $post->title ) !!}

{!! Form::label('slug','URL') !!}
{!! Form::text('slug', $post->slug ) !!}

{!! Form::label('content','Content') !!}
{!! Form::textarea('content', $post->content ) !!}

{!! Form::select('status', array('1' => 'published', '2' => 'unpublished' ,'3' => 'deleted' )) !!}

<button>Envoyer</button>

{!! Form::close() !!}

@endsection