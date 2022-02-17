@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <form action="/events" class="container col-md-6 mt-15" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if(isset($result) && $result === "error")
            <div class="alert alert-danger" role="alert">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="form-group mt-3">
            <label for="image" class="form-label">Selecione a Imagem</label>
        </div>
        <div class="form-group mt-3">
            <input type="file" class="form-control-file" name="image" style="margin-bottom: 15px;">
        </div>
        <div class="form-group mt-3">
            <label for="nameEvent" class="form-label">Nome Evento</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
        </div>
        <div class="form-group mt-3">
            <label for="dateEvent" class="form-label">Data do evento</label>
            <input type="date" class="form-control" name="date" id="date" aria-describedby="date">
        </div>
        <div class="form-group mt-3">
            <label for="nameEvent" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="description" id="description" aria-describedby="description">
        </div>
        <div class="form-group mt-3">
            <label for="nameEvent" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city" id="city" aria-describedby="city">
        </div>
        <div class="form-group mt-3">
            <label for="nameEvent" class="form-label">Tipo de Evento</label>
            <select name="private" class="form-select form-label" id="selectPrivate">
                <option value="0">Aberto</option>
                <option value="1">Privado</option>
            </select>
        </div>
        <div class="form-group  mt-3 mb-2">
            <label for="nameEvent" class="form-label">Estrutura do Evento</label>
            <div class="row mt-1">
                <div class="col-md-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input form-checkbox-color" name="items[]" value="Palco" type="checkbox" id="palco">
                        <label class="form-check-label " for="palco">Palco</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input form-checkbox-color" name="items[]" value="Brindes"  type="checkbox" id="brindes">
                        <label class="form-check-label" for="brindes">Brindes</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input form-checkbox-color" name="items[]" value="Cerveja Grátis" type="checkbox" id="cerveja">
                        <label class="form-check-label" for="cerveja">Cerveja Grátis</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input form-checkbox-color" name="items[]" value="Camarote" type="checkbox" id="camarote">
                        <label class="form-check-label" for="camarote">Camarote</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success col-12">Cadastrar</button>
    </form>
@endsection