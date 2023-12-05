@extends('layouts.layout')
@section('page_title')
    User Profile
@endsection

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
                <th scope="col">Brother</th>
                <th scope="col">Cities</th>
            </tr>
        </thead>
        <tbody id="my-table">

        </tbody>
    </table>
@endsection

@section('script')
    <script>
        const table = document.getElementById('my-table');
        let user = @json($user);
        console.log(user);

        const data = `
              <tr>
                <th scope="row">${user.name}</th>
                <td>${user.email}</td>
                <td>${user.age}</td>
                <td>${user.mobile}</td>
                <td>${user.address}</td>
                <td>${user.brothers.join(', ')}</td>
                <td>${user.city.join(", ")}</td>
              </tr>
        `

        table.innerHTML = data;
    </script>
@endsection
