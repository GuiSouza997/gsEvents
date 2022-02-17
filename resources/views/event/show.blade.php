@extends('layouts.main')

@section('title')

@section('content')

<div class="d-flex flex-column bd-highlight mb-3 text-center">
    <img src="/img/events/{{$events->image}}" id="image-show" alt="{{$events->title}}">
</div>

<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Informações do Evento
        </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <p class="p-2 bd-highlight align-items-center"><strong><ion-icon name="star-outline"></ion-icon> Evento:</strong> <span class="ps-2">{{$events->title}}</span></p>
                <p class="p-2 bd-highlight align-items-center"><strong><ion-icon name="location-outline"></ion-icon> Cidade:</strong> <span class="ps-2">{{$events->city}}</span></p>
                <p class="p-2 bd-highlight align-items-center"><strong><ion-icon name="calendar-outline"></ion-icon> Data do Evento:</strong> <span class="ps-2"> {{ date("d/m/Y", strtotime($events->date)) }} </span></p>
                <p class="p-2 bd-highlight align-items-center"><strong><ion-icon name="people-outline" class="style-class-icon"></ion-icon> Número de Partipantes:</strong><span class="ps-2"> 239 </span></p>

                <h4 style="color: #0c63e4">
                    Estrutura do evento:
                </h4>
                @foreach($events->items as $items )
                    <p class="align-items-center ps-3">
                        <ion-icon name="send-outline"></ion-icon> <span class="ps-2">{{$items}}</span> 
                    </p>
                @endforeach
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Descrição
        </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
            <div class="p-2 bd-highlight">{{$events->description}}</div>
        </div>
        </div>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto mt-5">
    <a href="" class="btn btn-success" type="button">Confirmar Presença</a>
</div>




@endsection