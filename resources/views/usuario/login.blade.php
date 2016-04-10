@extends('layout')

@section('content')
@include('auth.login', ['role' => 'usuario'])
@stop