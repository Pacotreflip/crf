@extends('layout')

@section('content')

<div class="row">
    <div class=" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
        <h1>Iniciar Sesión</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{url('auth/login')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <!-- Usuario Form Input -->
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control" required="required"  autofocus="autofocus" name="email" type="email" id="email">
            </div>

            <!-- Password Form Input -->
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input class="form-control" required="required"  name="password" type="password" id="password">
            </div>

            <div class="checkbox">
                <label>
                    <input name="remember_me" type="checkbox" value="1"> Recordar mi sesión en este equipo
                </label>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Iniciar sesión">
                <a class="btn btn-primary" href="{{url('auth/facebook')}}" role="button"><i class="fa fa-facebook-f fa-lg"></i> Iniciar Sesión con Facebook</a>
            </div>
        </form>
    </div>
</div>

@stop

