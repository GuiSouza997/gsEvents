@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if($name == "BGS")
            <h4> Bem vindo, você está na {{$name}}</h4>
        @else
            <h4> O evento acaboou :(</h4>
        @endif
    </div>
@endsection
