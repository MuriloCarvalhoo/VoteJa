@extends('app.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Criar Embates</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('embates.create') }}"> Criar novo Embate</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered text-center">
    <tr>
        <th>Categoria</th>
        <th>Embate</th>
        <th>Candidato 1</th>
        <th>Foto</th>
        <th>Candidato 2</th>
        <th>Foto</th>

    </tr>
    @foreach ($embates as $embates)
    <tr>
        <td>{{ $embates->nome_categoria }}</td>
        <td>{{ $embates->nome_embate }}</td>
        <td>{{ $embates->candidato_1 }}</td>
        <td><img src="{{ URL::to('/') }}/public/images/{{$embates->foto_1}}" alt="{{ $embates->candidato_1 }}" width="100" height="100" class="img-thumbnail" ></td>
        <td>{{ $embates->candidato_2 }}</td>
        <td><img src="{{ URL::to('/') }}/public/images/{{$embates->foto_2}}" alt="{{ $embates->candidato_2 }}" width="100" height="100" class="img-thumbnail" ></td>
    </tr>
    @endforeach
</table>

@endsection


