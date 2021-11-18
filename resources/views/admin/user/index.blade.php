@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
    <a href={{route('admin.user.new')}}><button class="btn btn-success mb-4" >Novo Usuário</button></a>
    {{-- Setup data for datatables --}}
    @php
    $heads = [
        'ID',
        'Nome',
        ['label' => 'E-mail', 'width' => 40],
        ['label' => 'Ações', 'no-export' => true, 'width' => 5],
    ];

    $btnDelete = '<a href={{route("admin.user.destroy")}}><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Deletar">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button></a>';

    $config = [
        'order' => [[1, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
    ];

    $data = [];
    foreach ($users as $user) {
        array_push($data, [$user->id, $user->name, $user->email, '<nobr>' . $btnDelete ]);
    }
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="usersTable" :heads="$heads">
        @foreach($data as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>

@stop
