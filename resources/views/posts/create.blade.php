@extends('adminlayout')
@section('content')
<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <form action='/post/store' method='post'>
      {{csrf_field()}}
      <input name="title" placeholder="Title"><br>
      <textarea name="entry" placeholder="Enter Thoughts" cols="120" rows="24"></textarea><br>
      <button type="submit">Post</button>
    </form>
  </div>
</div>
@endsection
