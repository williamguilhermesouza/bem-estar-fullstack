@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@stop

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container fluid">
    <form method="POST" action={{route('admin.user.save')}}>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome Completo</label>
                <input name="name" id="name" class="form-control" />
                <label for="email">E-mail</label>
                <input name="email" id="email" class="form-control" />
                <label for="password">Senha</label>
                <input name="password" id="password" type="password" class="form-control" />
                <label for="password_confirmation">Repita a senha</label>
                <input name="password_confirmation" type="password" id="password_confirmation" class="form-control"/>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
    </form>
</div>
@stop
