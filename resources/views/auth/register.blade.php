@extends('auth.app')

@section('title', 'Crear cuenta')

@section('content')

<div class="login-box">
    <div class="logo">        
        <h3>Sistema de Gestión Documental</h3>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_up" method="POST"action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf        
                <div class="msg"><b>Crear una cuenta para ingresar</b></div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">credit_card</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="dni" placeholder="Ingrese su dni" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="email" placeholder="Ingrese su correo electrónico" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                       
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
                        <input type="password" id="password" minlength="6" placeholder="Ingrese su contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
             
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" minlength="6" name="password_confirmation" placeholder="Repetir contraseña" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">Acepto los <a href="javascript:void(0);">terminos y condiciones</a>.</label>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">
                    {{ __('Registrarse') }}   
                </button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="{{route('login')}}">Ya tengo cuenta?</a>
                </div>
            </form>
        </div>
    </div>
</div>
               
@endsection
