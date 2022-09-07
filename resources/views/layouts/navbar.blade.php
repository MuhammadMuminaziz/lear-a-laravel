<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Laravel 8</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach($navbar as $name => $url)
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ $url }}">{{ $name }}</a>
        </li>
        @endforeach
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
        </li>
        @else
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger nav-link text-white btn-xs">Logout</button>
          </form>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>