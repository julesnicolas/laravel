@extends('layouts.master')
@section('content')
@forelse($categories as $category)
    <section>
        <h2><a href="">{{$category->title}}</a></h2>
    </section>
@empty
@endforelse
@endsection