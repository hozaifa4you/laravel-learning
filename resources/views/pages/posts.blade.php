@extends('layouts.layout')

@section('page_title')
  All Posts
@endsection


@section('content')
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @if(isset($posts))
      @foreach($posts as $id => $post)
        <div class="col">
          <div class="card h-100">
            <img
              id="post-image"
              src="{{$post->image}}"
              class="card-img-top" alt="{{$post->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{substr($post->description,0,300)}}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center p-3">
              <a href="{{route('post.single',$post->id)}}">Read</a>
              <a href="{{route('user.single',$post->user_id)}}">{{$post->name}}</a>
            </div>
          </div>
        </div>
      @endforeach
      <div class="my-2 w-100">
        {{$posts->links()}}
      </div>
    @else
      <p class="alert alert-danger">No user found!</p>
    @endif

  </div>
@endsection


