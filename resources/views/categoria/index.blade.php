@extends('app.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Categorias</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('categoria.create') }}">Criar uma nova categoria</a>
        </div>

    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container">
    <h1>Todas as categorias de Embates</h1>
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        @foreach ($nome_categoria as $nome_categoria)
        <div class="col">
            <div class="p-3 border bg-light">{{ $nome_categoria->nome_categoria }}</div>
        </div>
        @endforeach
    </div>
</div>

@endsection

