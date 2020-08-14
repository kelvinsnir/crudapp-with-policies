@extends('home')

@section('main')

<h2>laravel crud app with policies</h2>
<a class="col-md-offset-5 btn btn-primary" href="{{route('post.create')}}">Add New</a><br>
<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>title</th>
        <th>body</th>
        <th>author</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    @can('view', $post)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->user->name}}</td>
        @can('posts.update', $post)
        <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">edit</a></td>
        @endcan
        @can('posts.delete', $post)
        <td>
            <form id="delete-{{$post->id}}" method="post" action="{{ route('post.destroy', $post->id) }}">
                @csrf @method('DELETE')
                <button class="btn btn-danger">delete</button>
            </form>
        </td>
        @endcan
      </tr>
      @endcan
     @endforeach
    </tbody>
  </table>

@endsection
