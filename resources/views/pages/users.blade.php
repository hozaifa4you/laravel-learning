@extends('layouts.layout')

@section('content')
  <h2>User List</h2>
  @if(isset($users))
    @foreach($users as $id => $user)
      <div>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">{{$user['name']}}</div>
              {{$user['education']}}
            </div>
            <span class="badge bg-primary rounded-pill">Age: {{$user['age']}}</span>
          </li>
        </ol>
      </div>

    @endforeach
  @else
    <p>Users not found</p>
  @endif
@endsection
