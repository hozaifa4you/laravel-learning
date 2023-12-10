@extends('layouts.layout')

@section('content')
  <div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> User delete failed!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
@endsection


@section('page_title')
  Delete User
@endsection
