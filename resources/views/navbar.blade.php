<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <img src="img/miy.jpg" width="4%"  alt="..." class=" rounded-circle">
      <a class="navbar-brand" href="#">Navbar |</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/')?'active' : ''}}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about')?'active' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('berita')?'active' : ''}}" href="/berita">Berita</a>
          </li>
        </ul>

<ul class="navbar-nav ms-auto">
@auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
      role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome Back, {{ auth()->user()->name }}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="/dashboard"><i class="bi
        bi-layout-text-sidebar-reverse"></i> Dashboard Saya</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi
              bi-box-arrow-right"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link {{ Request::is('login')?'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
@endauth
    </ul>

      </div>
    </div>
  </nav>
  <div>
<div class = "container">

 