<nav class="navbar navbar-expand-lg" style="background-color:#0b2343;" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
      <img
        src="{{asset('assets/lib/bootstrap/img/log.png')}}"
        alt="Logo"
        class="me-3"
        style="height:45px; width:auto;"
      >
      {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('medecin')) active @endif" href="{{route('medecin')}}">Medecin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('service')) active @endif" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('infonews')) active @endif" href="*">InfoNews</a>
        </li>
      </ul>
      <div class="dropdown ms-auto">
        <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Mon compte
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">S'inscrire</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
