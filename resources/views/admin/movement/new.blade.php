@extends('adminlte::page')

@section('title', 'Movimentação')

@section('content_header')
    <h1>Nova Movimentação</h1>
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
    <form method="POST" action={{route('admin.movement.save')}}>
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="patientId">Nome do Paciente</label>
                <select name="patientId" id="patientId" class="form-control" >
                @foreach($patients as $patient)
                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Descrição</label>
                <input name="description" id="description" class="form-control" />
            </div>
            <div class="col">
                <label for="value">Valor</label>
                <input name="value" id="value" class="form-control" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
    </form>
</div>
@stop
