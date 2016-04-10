@extends('layout')

@section('content')
@include('auth.login', ['role' => 'admin'])
@stop