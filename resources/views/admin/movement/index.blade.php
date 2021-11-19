@extends('adminlte::page')

@section('title', 'Movimentações')

@section('content_header')
    <h1>Movimentações</h1>
@stop


@section('content')
    <a href={{route('admin.movement.new')}}><button class="btn btn-success mb-4" >Novo Movimentação</button></a>
    {{-- Setup data for datatables --}}
    @php
    $heads = [
        'ID',
        'Nome',
        ['label' => 'E-mail', 'width' => 40],
        ['label' => 'Ações', 'no-export' => true, 'width' => 5],
    ];


    $config = [
        'order' => [[1, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
        ];

    $data = [];
    foreach ($movements as $movement) {
        $btnEdit = '<a href="/admin/movimentacao/editar/' . $movement->id . '"><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </button></a>';
        $btnDelete = '<a href="/admin/movimentacao/deletar/' . $movement->id . '"><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button></a>';
        $btnDetails = '<a href="/admin/movimentacao/mostrar/' . $movement->id . '"><button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button></a>';
        array_push($data, [$movement->id, $movement->name, $movement->email, '<nobr>' . $btnDetails . '<nobr>' . $btnEdit . '<nobr>' . $btnDelete ]);
    }
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="movementsTable" :heads="$heads">
        @foreach($data as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>

@stop
