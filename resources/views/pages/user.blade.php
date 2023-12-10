@extends('layouts.layout')
@section('page_title')
  User Profile
@endsection

@section('content')
  <h3 class="text-secondary">User Details</h3>
  <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
    </tr>
    </thead>
    <tbody id="my-table">

    </tbody>
  </table>
@endsection

@section('script')
  <script>
    const table = document.getElementById('my-table');
    let user = @json($user)[0];
    console.log(user);

    const data = `
              <tr>
                <th scope="row">${user.id}</th>
                <th>${user.name}</th>
                <td>${user.email}</td>
                <td>${user.age}</td>
                <td>${user.phone}</td>
                <td>${user.address}</td>
                <td>${user.city}</td>
              </tr>
        `

    table.innerHTML = data;
  </script>
@endsection
