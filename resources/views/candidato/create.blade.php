@extends('app.layout')

@section('content')

<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle-x border border-5">
        <h2>Criar Candidato</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                {!! Form::open(['route' => 'candidato.store', 'method' => 'post', 'files' =>true]) !!}

                <div class="form-group ">
                    {{ Form::label('nome_candidato', 'Nome do Candidato') }}
                    {{ Form::text('nome_candidato', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('id_categoria', 'Categoria') }}
                    {{ Form::select('id_categoria', $categorias , null, ['class' => 'form-control', 'placeholder' => 'Select']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('size', 'Tamanho') }}
                    {{ Form::select('size', ['medium' => 'Médio'] , null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('foto', 'Foto do Candidato' ) }}
                    {{ Form::file('foto', array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Criar Candidato', array('class' => 'btn btn-success')) }}
                {!! Form::close() !!}
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('candidato.index') }}">Voltar</a>
    </div>

</div>

@endsection
