@extends('layout')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">PERIODO {{$periodo}}</h1>
                <p class="text-center">Encuentra tus salones</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <a href="usuario">
                    <img src="{{asset('img/user.png')}}" class="center-block img-circle img-responsive">
                    <h3 class="text-center">Alumno / Profesor</h3>
                </a>
            </div>
            <div class="col-md-6 col-xs-6">
                <a href="academia">
                    <img src="{{asset('img/user.png')}}" class="center-block img-circle img-responsive">
                    <h3 class="text-center">Jefe de Académia</h3>
                </a>

            </div>
        </div>
    </div>
</div>
@stop