@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Paciente {{$patient->name}}</h1>
@stop


@section('content')
<div class="container fluid">
    <form method="POST" action="{{route('admin.patient.update', ['id' => $patient->id])}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input name="name" id="name" value="{{$patient->name}}" class="form-control" />
            </div>
            <div class="col">
                <label for="Sex">Sexo</label>
                <select name="sex" id="sex" class="form-control" value="{{$patient->sex}}" >
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="col">
                <label for="phoneNumber">Telefone</label>
                <input name="phoneNumber" id="phoneNumber" value="{{$patient->phoneNumber}}" class="form-control" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="streetName">Rua</label>
                <input name="streetName" id="streetName" value="{{$patient->streetName}}" class="form-control"/>
            </div>
            <div class="col">
                <label for="streetNumber">Número</label>
                <input name="streetNumber" type="number" value="{{$patient->streetNumber}}" id="streetNumber" class="form-control"/>
            </div>
            <div class="col">
                <label for="streetDistrict">Bairro</label>
                <input name="streetDistrict" id="streetDistrict" value="{{$patient->streetDistrict}}" class="form-control"/>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="city">Cidade</label>
                <input name="city" id="city" value="{{$patient->city}}" class="form-control"/>
            </div>
            <div class="col">
                <label for="state">Estado</label>
                <select name="state" id="state" value="{{$patient->state}}" class="form-control">
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="am">Amazonas</option>
                    <option value="ap">Amapá</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="ro">Rondônia</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="se">Sergipe</option>
                    <option value="sp">São Paulo</option>
                    <option value="to">Tocantins</option>
                </select>
            </div>
            <div class="col">
                <label for="birthDate">Data de nascimento</label>
                <input name="birthDate" value="{{substr($patient->birthDate, 0, 10)}}" type="date" id="birthDate" class="form-control" />
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="cpf">CPF</label>
                <input name="cpf" value="{{$patient->cpf}}" id="cpf" class="form-control"/>
            </div>
            <div class="col">
                <label for="email">E-mail</label>
                <input name="email" value="{{$patient->email}}" type="email" id="email" class="form-control"/>
            </div>
            <div class="col">
                <label for="color">Cor</label>
                <select name="color" value="{{$patient->color}}" id="color" class="form-control">
                    <option value="Branco">Branco</option>
                    <option value="Negro">Negro</option>
                    <option value="Pardo">Pardo</option>
                    <option value="Outra">Outra</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="civilState">Estado Civil</label>
                <select name="civilState" value="{{$patient->civilState}}" id="civilState" class="form-control">
                    <option value="Casado">Casado</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Outra">Outra</option>
                </select>
            </div>
            <div class="col">
                <label for="religion">Religião</label>
                <select name="religion" value="{{$patient->religion}}" id="religion" class="form-control">
                    <option value="Católica">Católica</option>
                    <option value="Protestante">Protestante</option>
                    <option value="Espírita">Espírita</option>
                    <option value="Outra">Outra</option>
                </select>
            </div>
            <div class="col">
                <label for="scholarship">Escolaridade</label>
                <select name="scholarship" value="{{$patient->scholarship}}" id="scholarship" class="form-control">
                    <option value="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
                    <option value="Ensino fundamental completo">Ensino fundamental completo</option>
                    <option value="Ensino médio completo">ensino médio completo</option>
                    <option value="Ensino superior incompleto">ensino superior incompleto</option>
                    <option value="Ensino superior completo">ensino superior completo</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="profession">Profissão</label>
                <input name="profession" value="{{$patient->profession}}" id="profession" class="form-control"/>
            </div>
            <div class="col">
                <label for="placeOfBirth">Naturalidade</label>
                <input name="placeOfBirth" value="{{$patient->placeOfBirth}}" id="placeOfBirth" class="form-control"/>
            </div>
            <div class="col-md-2">
                <label for="weight">Peso</label>
                <input name="weight" id="weight" value="{{$patient->weight}}" class="form-control"/>

            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col-md-2">
                <label for="height">Altura</label>
                <input name="height" id="height" value="{{$patient->height}}" class="form-control"/>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
    </form>
</div>
@stop
