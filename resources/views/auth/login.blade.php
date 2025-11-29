
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
            @csrf
            <div>
                 <input type="email" class="form-control mb-3 rounded-pill" name="email" value="{{old('email')}}" placeholder="E-mail"  required/>
                 <small class="text-danger fw-old" id="error-login-email"></small>
            </div>
            <div>
                 <input type="password" class="form-control mb-3 rounded-pill" name="password" value="{{old('password')}}" placeholder="Mot de passe"  required/>
                 <small class="text-danger fw-old"></small>
            </div>

            <div class="d-grid gap-2 col-12 mx-auto text-center">
              <button type="submit" class="btn btn-success rounded-pill px-4">Connexion →</button><br>
              <span class="">Je suis nouveau <a href="{{route('register')}}">Register</a></span>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>

@endsection
