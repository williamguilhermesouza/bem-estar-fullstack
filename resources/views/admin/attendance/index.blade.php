@extends('adminlte::page')

@section('title', 'Atendimentos')

@section('content_header')
    <h1>Lista de Pacientes</h1>
@stop


@section('content')
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
    foreach ($patients as $patient) {
        $btnDetails = '<a href="/admin/atendimentos/listar/' . $patient->id . '"><button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Listar Atendimentos">
                        <i class="fa fa-lg fa-fw fa-file-alt"></i>
                    </button></a>';
        array_push($data, [$patient->id, $patient->name, $patient->email, '<nobr>' . $btnDetails ]);
    }
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="patientsTable" :heads="$heads">
        @foreach($data as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>

@stop
