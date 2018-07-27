@extends('auth.app')

@section('title', 'Iniciar sesión')

@section('content')
<div class="login-box">
    <div class="logo">
        <img src="{{asset('images/logo.png')}}" alt="Login">
        <h3>Sistema de Gestión Documental</h3>
    </div>
    <div class="card">
        <div class="body">
                
            <form id="sign_in" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                <div class="msg"> <b>Iniciar Sesión</b></div>
                @csrf

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">mail</i>
                    </span>
                    <div class="form-line">
                        <input id="email" type="email" placeholder="Ingrese su correo" required class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
    
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" id="password" placeholder="Ingrese su contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Recordarme</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">{{ __('Ingresar') }}</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="{{route('register')}}">Registrarme ahora!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="{{ route('password.request') }}">{{ __('Olvide mi contraseña?') }}</a>
                    </div>
                </div>   

                
            </form>

        </div>
    </div>
</div>
@endsection
