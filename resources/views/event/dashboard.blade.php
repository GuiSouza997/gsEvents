@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome </th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$event->title}}</td>
                            <td>0</td>
                            <td>
                                <a href="/events/update"><ion-icon name="create"></ion-icon></a>
                                <a href="/events/delete"><ion-icon name="trash"></ion-icon></a>
                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>

        @else 
            <p>Você não tem eventos, <a href="/events/create">Cria Evento</a></p>
        @endif
    </div>

@endsection