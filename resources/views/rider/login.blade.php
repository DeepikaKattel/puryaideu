@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('login') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="form-check">--}}
    {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                    <label class="form-check-label" for="remember">--}}
    {{--                                        {{ __('Remember Me') }}--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-8 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Login') }}--}}
    {{--                                </button>--}}

    {{--                                @if (Route::has('password.request'))--}}
    {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                        {{ __('Forgot Your Password?') }}--}}
    {{--                                    </a>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}


    <div class="containerCustomer go-register">
        <!-- Login Form Starts -->
        <div class="form__container form__container-login">
            <form action="" class="form">
                <h3 class="form__heading"> Sign In</h3>
                <ul class="list list__inline list__social">
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-facebook-f"></i></a></li>
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-google-plus-g"></i></a>
                    </li>
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <p class="form__text">or use your account</p>
                <input type="email" placeholder="email" class="form__field">
                <input type="password" placeholder="password" class="form__field">
                <p class="form__text">Forgot your password?</p>
                <button type="submit" class="btn-login btn--main">Sign In</button>
            </form>
        </div>
        <!-- Login Form Ends -->
        <!-- Register Form Starts -->
        <div class="form__container form__container-register">
            <form action="" class="form">
                <h3 class="form__heading"> Create Account</h3>
                <ul class="list list__inline list__social">
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-facebook-f"></i></a></li>
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-google-plus-g"></i></a>
                    </li>
                    <li class="list__item list__social__item"><a href="#" class="list__link"><i
                                class="list__icon fa fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <p class="form__text">or use your email for registeration</p>
                <input type="text" placeholder="name" class="form__field">
                <input type="email" placeholder="email" class="form__field">
                <input type="password" placeholder="password" class="form__field">
                <button type="submit" class="btn-login btn--main">Sign Up</button>
            </form>
        </div>
        <!-- Register Form Ends -->
        <!-- Overlay container Starts -->
        <div class="overlay-container">
            <!-- Right Overlay Starts -->
            <div class="overlay overlay--right">
                <h3 class="overlay__heading">Hello Friend</h3>
                <p class="overlay__desc">Enter your personal details and start journey with us</p>
                <button type="button" id="go-register" class="btn-login btn--main-outline">Sign Up</button>
            </div>
            <!-- Right Overlay Ends -->
            <!-- Left Overlay Starts -->
            <div class="overlay overlay--left">
                <h3 class="overlay__heading">Welcome Back!</h3>
                <p class="overlay__desc">Keep connected with us please login with your personal info</p>
                <button type="button" id="go-login" class="btn-login btn--main-outline">Sign In</button>
            </div>
            <!-- Left Overlay Ends -->
        </div>
        <!-- Overlay Container Ends -->
    </div>
@endsection