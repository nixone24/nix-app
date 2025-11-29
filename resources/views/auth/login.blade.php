
@extends('base')
@section('title', 'Login')
@section('content')

<div class="container">

     <div class="container d-flex justify-content-center mb-5">
    <div class="bg-white rounded-4 " style="max-width: 900px; width:100%;">
      <div class="row align-items-center">
        <div class="col-md-6 text-center">
          <img src="{{asset('assets/lib/bootstrap/img/form.png')}}" class="img-fluid" alt="Illustration" />
        </div>
        <div class="col-md-6">
          <h3 class="mb-4 text-center">{{ config('app.name') }} - @yield('title')</h3>
          <form action="" method="POST" class="form">
            <input type="email" name="email" class="form-control mb-3 rounded-pill" placeholder="Email" />
            <input type="password" name="password" class="form-control mb-3 rounded-pill" placeholder="Mot de passe" />

            <div class="text-center">
              <button type="submit" class="btn btn-success rounded-pill px-4">Connexion →</button><br>
              <span class="">Je suis nouveau <a href="{{route('register')}}">register</a></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
