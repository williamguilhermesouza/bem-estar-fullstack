@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1>Novo Paciente</h1>
@stop

@section('content')
    <form method="POST" action="#">
        @csrf
        <label for="name">Nome</label>
        <input name="name" id="name" />
    </form>
@end
