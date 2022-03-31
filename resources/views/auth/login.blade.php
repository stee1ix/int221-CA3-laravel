@extends('layouts.app')

@section('styles')
<style>
.bold {
    font-size: 2rem;
    margin-bottom: 1rem;
}

form label {
    margin: 1rem 0 0.5rem 0;
}

button {
    margin: 2rem 0;
}

.container {
    display: flex;
    justify-content: center;
}

.card {
    width: 500px;
    padding: 2rem;
    -webkit-box-shadow: 10px 10px 30px -8px rgba(212, 212, 212, 1);
    -moz-box-shadow: 10px 10px 30px -8px rgba(212, 212, 212, 1);
    box-shadow: 10px 10px 30px -8px rgba(212, 212, 212, 1);
}

span {
    color: red;
}
</style>
@endsection

@section('content')
<div class="container">
    <div>
        <div>
            <div class="card">
                <div class="bold">{{ __('Login') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email">{{ __('Email Address') }}</label>

                            <div>
                                <input class="form-control" id="email" type="email" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input class="form-control" id="password" type="password" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div>
                            <div>
                                <div>
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection