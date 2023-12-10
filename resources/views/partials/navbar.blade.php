<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand d-flex gap-2 align-items-center" href="/">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png"
           alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <p class="m-0">Laravel Learning</p>
    </a>

    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('posts')}}">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.all')}}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contact</a>
      </li>

    </ul>
  </div>
</nav>
