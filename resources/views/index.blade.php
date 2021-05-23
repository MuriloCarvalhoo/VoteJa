@extends('app.layout')

@section('content')


@php
    $lastcategoria = "";
@endphp

@foreach ($embates as $categoria )

@php
    $firstCategoria = $categoria->nome_categoria;
    $idCategoria = $categoria->id_categoria;
@endphp

@if($firstCategoria !== $lastcategoria)


    <div class="my-3 container" id="{{ $firstCategoria }}">

        <div class="text-center">
            <h1>{{ $firstCategoria }}</h1>
        </div>

        <div class="glider-contain " id="glider-{{ $idCategoria}}">
            <div class="glider">
          
          
                @foreach ($embates as $embate )

                    @php
                        $nameEmbate = $embate->nome_embate;
                        $embateCategoria = $embate->nome_categoria;
                        $categoriaAtual = $firstCategoria;
                    @endphp

                @if($embateCategoria === $categoriaAtual)

                            
                <div >

                    <div class="col s12 m4 18">
                        <h2 class="text-center">{{ $embate->nome_embate}}</h2>
                    </div>

                    <div class="row row-cols-2 row-cols-md-4 g-4 text-center justify-content-md-center">

                        <div class="col">

                            <div class="card">

                                <img src="{{ URL::to('/') }}/public/images/{{$embate->foto_1}}" class="card-img-top" alt="{{ $embate->candidato_1 }}">
                                <div class="card-body">

                                    <h5 class="card-title text-dark">{{ $embate->candidato_1}}</h5>
                                    <p class="card-text text-dark">Total de votos: {{ $embate->voto_1 }}</p>

                                    <form action="{{ route('store') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $embate->id }}" id="{{ $embate->id }}" name="id">
                                        <input type="hidden" value="{{ $embate->candidato_1 }}" id="{{ $embate->candidato_1 }}" name="candidato">
                                        <input type="submit" value="VOTAR" class="btn btn-outline-secondary" id="votar">
                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="col">

                            <div class="card">

                                <img src="{{ URL::to('/') }}/public/images/{{$embate->foto_2}}" class="card-img-top" alt="{{ $embate->candidato_2 }}">
                                <div class="card-body">

                                    <h5 class="card-title text-dark">{{ $embate->candidato_2}}</h5>
                                    <p class="card-text text-dark">Total de votos: {{ $embate->voto_2 }}</p>

                                    <form action="{{ route('store') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $embate->id }}" id="{{ $embate->id }}" name="id">
                                        <input type="hidden" value="{{ $embate->candidato_2 }}" id="{{ $embate->candidato_2 }}" name="candidato">
                                        <input type="submit" value="VOTAR" class="btn btn-outline-secondary" id="votar">
                                    </form>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                @endif

                @endforeach

            </div>
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>

        </div>
        
    </div>

@endif

@php
    $lastcategoria = $firstCategoria;

@endphp

@endforeach

@endsection

