
@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    <div class="col-md-12" id="search-container">
        <h1 id="h1-search-event">Busque um evento</h1>
        <form action="/" method="GET" id="form-search">
            <div class="input-group mb-3" style="min-width: 144px;">
                <input type="text" class="form-control input-group"  name="search" class="form-control">
                <button class="btn ps-3 pt-2 pb-1 m-0" type="button" id="btn-search"><ion-icon name="search-outline"></ion-icon></button>
            </div>
        </form>
    </div>

    <h2 class="text-center">Próximos Eventos</h2>
    <p class="text-center">Veja os eventos dos próximos dias</p>

    <div  class="container">

        <div id="cards-container" class="row align-items-center">
            @if(count($events) === 0)
                <p class="text-center">Não foi encontrado eventos para a busca </p>
            @else
                @foreach($events as $event)
                <div class="card col-xs-6 col-xs-6 col-md-4 col-lg-2 xl-1 xxl-1">
                    @if($event->image != "")
                        <img src="/img/events/{{$event->image}}" class="figure-img img-fluid rounded size-image" alt="{{ $event->title }}">
                    @else
                        <img src="/img/event.png" class="figure-img img-fluid rounded size-image align-items-center" alt="{{ $event->title }}">
                    @endif
                    <div class="card-body text-center">
                        <p class="card-date ">{{ date("d/m/Y", strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
                @endforeach
            @endif



        </div>
    </div>

@endsection
