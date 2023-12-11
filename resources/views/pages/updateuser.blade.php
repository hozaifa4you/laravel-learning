@extends('layouts.layout')

@section('content')
  <div class="w-100 d-flex justify-content-center">
    <div class="w-50">
      <h4 class="text-center">Edit User {{$data->name}}</h4>
      <form class="row g-3" action="{{route('user.update.post',$data->id)}}" method="POST">
        @csrf
        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input value="{{$data->name}}" type="text" class="form-control" id="name" placeholder="Enter your name"
                 name="name">
        </div>
        <div class="col-md-12">
          <label for="email-address" class="form-label">Email Address</label>
          <input value="{{$data->email}}" type="email" class="form-control" id="email-address"
                 placeholder="Enter your email address"
                 name="email">
        </div>
        <div class="col-md-12">
          <label for="phone" class="form-label">Phone number</label>
          <input value="{{$data->phone}}" type="text" class="form-control" id="phone"
                 placeholder="Enter your phone number" name="phone">
        </div>
        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input value="{{$data->address}}" type="text" class="form-control" id="address"
                 placeholder="Enter your address" name="address">
        </div>

        <div class="col-md-6">
          <label for="city" class="form-label">City</label>
          <input value="{{$data->city}}" type="text" class="form-control" id="city" placeholder="Enter your city"
                 name="city">
        </div>

        <div class="col-md-6">
          <label for="age" class="form-label">Age</label>
          <input value="{{$data->age}}" type="text" class="form-control" id="age" placeholder="Enter your age"
                 name="age">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('page_title')
  Edit user
@endsection
