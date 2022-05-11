@extends('layouts.app')

@section('content')
<section class="section signup-area signin-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 order-2 order-xl-0">
                <div class="signup-area-textwrapper">
                    <h2 class="font-title--md mb-0">Se Connecter</h2>
                    <p class="mt-2 mb-lg-4 mb-3">Vous n'avez pas un compte? <a href="{{ route('register') }}" class="text-black-50">S'inscrire</a></p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-element success">
                            <div class="form-alert">
                                <label for="name">Email</label>
                            </div>
                            <div class="form-alert-input">
                                <input type="email" name="email" placeholder="Arif Ahmed" id="name">
                                <div class="form-alert-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-element active">
                            <div class="d-flex justify-content-between">
                                <label for="confirm-password">Password</label>
                                @if (Route::has('password.request'))
                                    <a class="text-primary fs-6" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-alert-input">
                                <input type="password" placeholder="Type here..." id="confirm-password">
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
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

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