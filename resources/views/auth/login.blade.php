@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Inicie Sesión</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Usuario Form Input -->
            <div class="form-group">
                <label for="email">E-Mail:</label>
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
                <input class="btn btn-primary" type="submit" value="Iniciar sesión">
                <input class="btn btn-primary" type="submit" value="Iniciar sesión">
            </div>
        </form>
    </div>
</div>

@stop

