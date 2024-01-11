@extends('layouts.layout')

@section('content')

  <div class="row justify-content-center">
    <div class="col-6">

      @foreach($errors as $error)
        @error($errors->first($error))
        {{$message}}
        @enderror
      @endforeach

      <form class="row g-3" method="POST" action="{{route('user.validation.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
          <label for="name" class="form-label">Name</label>
          <input value="{{old('name')}}" name="name" type="text"
                 class="form-control @if($errors->has('name')) is-invalid @endif" id="name">
          <span class="invalid-feedback">
            {{$errors->first('name')}}
          </span>
        </div>
        <div class="col-md-12">
          <label for="email" class="form-label">Email Address</label>
          <input value="{{old('email')}}" type="email"
                 class="form-control  @if($errors->has('email')) is-invalid @endif" id="email"
                 name="email">
          <span class="invalid-feedback">
            {{$errors->first('email')}}
          </span>
        </div>
        <div class="col-md-9">
          <label for="inputState" class="form-label">Select City</label>
          <select id="inputState"
                  class="form-select  @if($errors->has('city')) is-invalid @endif" name="city">
            <option selected value="">Choose...</option>
            <option>Dhaka</option>
            <option>Khulna</option>
            <option>Satkhira</option>
            <option>Chattogram</option>
            <option>Sylhet</option>
            <option>Rongpur</option>
          </select>
          <span class="invalid-feedback">
            {{$errors->first('city')}}
          </span>
        </div>
        <div class="col-md-3">
          <label for="age" class="form-label">Age</label>
          <input value="{{old('age')}}" type="text" class="form-control  @if($errors->has('age')) is-invalid @endif"
                 id="age" name="age">
          <span class="invalid-feedback">
            {{$errors->first('age')}}
          </span>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Select a avatar</label>
          <input class="form-control @if($errors->has('image')) is-invalid @endif" type="file" id="image"
                 name="image">
          <span class="invalid-feedback">
            {{$errors->first('image')}}
          </span>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="agree">
            <label class="form-check-label  @if($errors->has('agree')) is-invalid @endif" for="gridCheck">
              Do you agree?
            </label>
            <span class="invalid-feedback">
            {{$errors->first('agree')}}
          </span>
          </div>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection


@section('page_title')
  User Validation
@endsection
