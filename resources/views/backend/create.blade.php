@extends('layouts.dashboard')
@section('content')
<h1>Ajouter un article</h1>
{!! Form::open(['url' => route('backend.store')]) !!}

{!! Form::label('title','Titre') !!}
{!! Form::text('title', null ) !!}

{!! Form::label('slug','URL') !!}
{!! Form::text('slug', null ) !!}

{!! Form::label('content','Content') !!}
{!! Form::textarea('content', null ) !!}

{!! Form::select('status', array('1' => 'published', '2' => 'unpublished'  )) !!}

<button>Envoyer</button>

{!! Form::close() !!}

@endsection