@extends('layouts.app')

@section('content')
<section class="section signup-area signin-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 order-2 order-xl-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Se Connecter</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Vous avez dèjà un compte? <a href="{{ route('login') }}" class="text-black-50">S'inscrire</a></p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-element ">
                            <div class="form-alert">
                                <label for="name">Nom</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="text" value="{{ old('nom') }}" name="nom" placeholder="Arif Ahmed" id="name">
                                <div class="form-alert-icon">
                                    *
                                </div>
                            </div>
                            @error('nom')
                               <span class="invalid-feedback d-block" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-element ">
                            <div class="form-alert">
                                <label for="prenom">Prénom</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="text" value="{{ old('prenom') }}" name="prenom" placeholder="Arif Ahmed" id="prenom">
                                <div class="form-alert-icon">
                                    *
                                </div>
                            </div>
                            @error('prenom')
                               <span class="invalid-feedback d-block" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-element ">
                            <div class="form-alert">
                                <label for="name">Numéro de téléphone</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="number" value="{{ old('numtel') }}" name="numtel" placeholder="XX XXX XXX" id="name">
                                <div class="form-alert-icon">
                                    *
                                </div>
                            </div>
                            @error('numtel')
                               <span class="invalid-feedback d-block" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-element ">
                            <div class="form-alert">
                                <label for="name">Email</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="email" value="{{ old('email') }}" name="email" placeholder="example@gmail.com" id="name">
                                <div class="form-alert-icon">
                                    *
                                </div>
                            </div>
                            @error('email')
                               <span class="invalid-feedback d-block" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-element active">

                            <div class="form-alert-input">
                                <input type="password" value="{{ old('password') }}" name="password" placeholder="Mot de passe" id="confirm-password">
                                <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-element active">

                            <div class="form-alert-input">
                                <input type="password" name="password_confirmation" placeholder="Confirmer mot de passe" id="confirm-password">
                                <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="form-element">
                            <button type="submit" class="button button-lg button--primary w-100">Connecter</button>
                        </div>


                    </form>
                </div>
            </div>
            <div class="col-xl-7 order-1 order-xl-0">
                <div class="signup-area-image">
                    <img src="{{ asset('assets/front/dist/images/signup/Illustration.png') }}" alt="Illustration Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection