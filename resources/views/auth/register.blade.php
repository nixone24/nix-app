@extends('base')
@section('title', 'Register')
@section('content')

<div class="py-5">
    <div class="container d-flex justify-content-center">
        <div class="bg-white" style="max-width: 900px; width:80%;">
            <div class="row align-items-center">

                <!-- Image à gauche -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/lib/bootstrap/img/form.png') }}" class="img-fluid" alt="Illustration" />
                </div>

                <!-- Formulaire -->
                <div class="col-md-5">
                    <h3 class="mb-3 text-center">{{ config('app.name') }} - @yield('title')</h3>

                    <form method="POST" action="">
                        @csrf

                        <!-- Genre -->
                                        <div class="mb-3 d-flex justify-content-between" id="genreContainer">
                    <span class="me-2">Genre :</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" id="homme" value="H" aria-label="Homme" />
                        <label class="form-check-label" for="homme">Homme</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" id="femme" value="F" aria-label="Femme" />
                        <label class="form-check-label" for="femme">Femme</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" id="autre" value="A" aria-label="Autre" />
                        <label class="form-check-label" for="autre">Autre</label>
                    </div>
                </div>
                <small id="genreError" class="text-danger fw-old"></small>
                        <!-- Nom et Prénom sans labels -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}"
                                    class="form-control rounded-pill" placeholder="Nom" autocomplete="family-name" aria-label="Nom" />
                                <small class="text-danger fw-old"></small>
                            </div>
                            <div class="col-6">
                                <input type="text" name="firstName" id="firstName" value="{{ old('firstName') }}"
                                    class="form-control rounded-pill" placeholder="Prénom" autocomplete="given-name" aria-label="Prénom" />
                                <small class="text-danger fw-old"></small>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="form-control rounded-pill" placeholder="E-mail" autocomplete="email" aria-label="E-mail" />
                            <small class="text-danger fw-old"></small>
                        </div>

                        <!-- Date de naissance -->
                        <div class="mb-3">
                            <input type="date" name="birth" id="birth" value="{{ old('birth') }}"
                                class="form-control rounded-pill" autocomplete="bday" aria-label="Date de naissance" />
                            <small class="text-danger fw-old"></small>
                        </div>

                        <!-- Mot de passe -->
                        <div class="mb-3">
                            <input type="password" name="password" id="password"
                                class="form-control rounded-pill" placeholder="Mot de passe" autocomplete="new-password" aria-label="Mot de passe" />
                            <small class="text-danger fw-old"></small>
                        </div>

                        <!-- Confirmation mot de passe -->
                        <div class="mb-3">
                            <input type="password" name="password2" id="password2"
                                class="form-control rounded-pill" placeholder="Répète mot de passe" autocomplete="new-password" aria-label="Répète mot de passe" />
                            <small class="text-danger fw-old"></small>
                        </div>

                        <!-- Conditions -->
                        <div class="form-check mb-3 text-muted" id="genreContainer">
                        <input class="form-check-input" name="checkIndeterminate" type="checkbox" id="checkIndeterminate" value="" aria-label="Accepter les conditions">
                        <label class="form-check-label" for="checkIndeterminate">
                            J'accepte les conditions d'utilisation.
                        </label>
                        <small id="checkError" class="text-danger fw-old"></small>
                    </div>


                        <!-- Bouton submit -->
                        <div class="d-grid gap-2 col-12 mx-auto text-center">
                            <button type="submit" class="btn btn-success rounded-pill px-120">S'enregister →</button>
                        </div>

                        <p class="text-start text-md-end">J'ai un compte <a href="{{ route('login') }}">Login</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
