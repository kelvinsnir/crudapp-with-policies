@extends('home')
@section('main')
<h2>create</h2>
  <form action="{{ route('post.store')}}" method="post" >
  	@csrf
    <div class="form-group">
      <label>title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label>body</label>
      <input type="text" class="form-control" name="body" placeholder="Enter body">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection