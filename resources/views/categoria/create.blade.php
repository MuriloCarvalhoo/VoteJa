@extends('app.layout')

@section('content')

<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle-x border border-5">
        <h2>Criar Categoria</h2>

                {!! Form::open(['route' => 'categoria.store', 'method' => 'post']) !!}

                <div class="form-group ">
                    {{ Form::label('nome_categoria', 'Nome do Candidato') }}
                    {{ Form::text('nome_categoria', null, array('class' => 'form-control')) }}
                </div>


                {{ Form::submit('Criar Categoria', array('class' => 'btn btn-success')) }}
                {!! Form::close() !!}
    </div>
</div>

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('candidato.index') }}">Voltar</a>
</div>

@endsection
