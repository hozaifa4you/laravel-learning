<h2>Main Page</h2>

@php
    $users = ['Yousuf Ahamad', 'Anamul Hasan', 'Amma Anisa', 'Anika'];
@endphp


<ul>
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</ul>
