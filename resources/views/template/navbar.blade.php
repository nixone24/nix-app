<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarNav ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('service')) active @endif" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('medecin')) active @endif" href="{{route('medecin')}}">Medecin</a>
        </li>

        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('connexion')) active @endif" href="{{route('connexion')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('formulaire')) active @endif" href="{{route('formulaire')}}">S'inscrire</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
