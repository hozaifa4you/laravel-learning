@include('partials.header')

<title>Home - Laravel Learning</title>

<h2>Main Page</h2>

@php
    $users = ['Yousuf Ahamad', 'Anamul Hasan', 'Amma Anisa', 'Anika'];
    $rivers = ['padma', 'meghna', 'jomuna', 'posur'];
@endphp

@include('partials/first', ['user' => $users])
@include('partials.second')

<ul>
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</ul>

@include('partials.footer')
