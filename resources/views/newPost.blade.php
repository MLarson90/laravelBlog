@extends('layout')
@section('content')
  <form action='/blogpost' method='post'>
    {{csrf_field()}}
    <input name="title" placeholder="Title"><br>
    <textarea name="entry" placeholder="Enter Thoughts" cols="120" rows="24"></textarea><br>
    <button type="submit">Post</button>
  </form>
@endsection
