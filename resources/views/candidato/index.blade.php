@extends('app.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Criar Candidatos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('candidato.create') }}"> Criar candidato</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Candidato</th>
        <th>Categoria</th>
        <th>Foto</th>

    </tr>
    @foreach ($candidatos as $candidatos)
    <tr>
        <td>{{ $candidatos->nome_candidato }}</td>
        <td>{{ $candidatos->nome_categoria }}</td>
        <td><img src="{{ URL::to('/') }}/images/{{$candidatos->foto}}" alt="{{ $candidatos->nome_candidato }}" width="100" height="100" class="img-thumbnail" ></td>
    </tr>
    @endforeach
</table>

@endsection

