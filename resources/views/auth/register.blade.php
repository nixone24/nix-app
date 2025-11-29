
@extends('base')
@section('title', 'Register')
@section('content')

  <div style="background: transparent;" class="py-5">

      <div class="container d-flex justify-content-center">
    <div class="bg-white " style="max-width: 900px; width:80%;">
      <div class="row align-items-center">
        <div class="col-md-6 text-center">
          <img src="{{asset('assets/lib/bootstrap/img/form.png')}}" class="img-fluid" alt="Illustration" />
        </div>
        <div class="col-md-5">
          <h3 class="mb-3 text-center">{{ config('app.name') }} - @yield('title')</h3>
          <form method="POST" action="" >
                    @csrf
                    <div class="row mb-3">
                    <div class="mb-3 d-flex justify-content-between">
        <label class="me-1">Genre :</label>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="homme" />
                <label class="form-check-label" for="homme">Homme</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="femme" />
                <label class="form-check-label" for="femme">Femme</label>
        </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="autre" />
                <label class="form-check-label" for="autre">Autre</label>
            </div>
            </div>
                    <div class="col-6"><input type="text" class="form-control rounded-pill" placeholder="Nom" /></div>
                    <div class="col-6"><input type="text" class="form-control rounded-pill" placeholder="Prénom" /></div>
                    </div>
                    <div>
                        <input type="email" class="form-control mb-3 rounded-pill" placeholder="E-mail"  required/>
                        <small class="text-danger fw-old"></small>
                    </div>
                <div>
                        <input type="date" class="form-control mb-3 rounded-pill" placeholder="Date de naissance"  required/>
                        <small class="text-danger fw-old"></small>
                    </div>
                    <div>
                        <input type="password" class="form-control mb-3 rounded-pill" placeholder="Mot de passe"  required/>
                        <small class="text-danger fw-old"></small>
                    </div>
                    <div>
                        <input type="password" class="form-control mb-3 rounded-pill" placeholder="Répète mot de passe"  required/>
                        <small class="text-danger fw-old"></small>
                    </div>


            <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="checkIndeterminate" required>
            <label class="form-check-label" for="checkIndeterminate">
            J'accepte les conditions d'utilisation

        </label>
        </div>

            <div class="d-grid gap-2 col-12 mx-auto text-center">
                <button type="submit" class="btn btn-success rounded-pill px-120">S'enregister →</button>
            </div>
            </form>
            <p class="text-lowercase text-center mb-1">J'ai un compte <a href="{{route('login')}}">Login</a></p>
            </div>
        </div>
        </div>
    </div>

    </div>


@endsection
