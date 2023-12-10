@extends('layouts.layout')

@section('page_title')
  All Users List
@endsection

@section('content')
  <h2>User List</h2>
  <div class="d-flex align-items-center justify-content-between my-1">
    <a href="{{route('user.new')}}" class="btn btn-primary">New User</a>
  </div>
  @if(isset($users))
    @foreach($users as $id => $user)
      <div>
        <ol class="list-group mb-1">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">{{$user->id}}. {{$user->name}}</div>
              {{$user->email}}
            </div>
            <span class="btn btn-light btn-sm disabled me-1">Age: {{$user->age}}</span>
            <a class="btn btn-primary btn-sm me-1" href="{{route('user.single', $user->id)}}">view</a>
            <a class="btn btn-warning btn-sm me-1" href="{{route('user.update', $user->id)}}">Edit</a>
            <a class="btn btn-danger btn-sm" href="{{route('user.delete', $user->id)}}">Delete</a>
          </li>
        </ol>
      </div>

    @endforeach

  @else
    <p>Users not found</p>
  @endif
@endsection
