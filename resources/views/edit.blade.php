@extends('home')
@section('main')
  <h2>edit</h2>
  <form action="{{ route('post.update', $post->id) }}" method="post" >
  	@csrf @method('PUT')
    <div class="form-group">
      <label>title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label>body</label>
      <input type="text" class="form-control" name="body" placeholder="Enter body" value="{{$post->body}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection