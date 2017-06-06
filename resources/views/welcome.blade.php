@extends('layout')
@section('content')
  <div class="container">
<h1>Hi Xing</h1>

<div id="app">
  <example></example>
</div>


@foreach( App\Post::show() as $post)
<h2>{{ $post->title }}</h2>
<p>{{ $post->entry }}</p>
@endforeach
</div>
@endsection
