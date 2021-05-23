@extends('app.layout')

@section('content')


<div class="position-relative m-4 text-white">
    <div class="position-absolute top-50 start-50 translate-middle-x border border-5 p-4 text-center">
        <h2>Criar Embate</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="fs-4 mt-2">
                {!! Form::open(['route' => 'embates.store', 'method' => 'post', 'files' =>true]) !!}
                    @csrf
                <div class="form-group m-3">
                    {{ Form::label('id_categoria', 'Categoria') }}
                    {{ Form::select('id_categoria', $categorias , null, ['class' => 'form-control', 'placeholder' => 'Select']) }}
                </div>

                <div class="form-group m-3">
                    {{ Form::label('candidato_1', 'Nome do primeiro candidato') }}
                    {{ Form::text('candidato_1', null, array('class' => 'form-control')) }}
                </div>


                <div class="form-group m-3">
                    {{ Form::label('size', 'Tamanho') }}
                    {{ Form::select('size', ['medium' => 'Médio'] , null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group m-3">
                    {{ Form::label('foto_1', 'Foto do primeiro candidato' ) }}
                    {{ Form::file('foto_1', array('class' => 'form-control')) }}
                </div>

                <div class="form-group m-3">
                    {{ Form::label('candidato_2', 'Nome do segundo candidato') }}
                    {{ Form::text('candidato_2', null, array('class' => 'form-control')) }}
                </div>


                <div class="form-group m-3">
                    {{ Form::label('size', 'Tamanho') }}
                    {{ Form::select('size', ['medium' => 'Médio'] , null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group m-3">
                    {{ Form::label('foto_2', 'Foto do segundo candidato' ) }}
                    {{ Form::file('foto_2', array('class' => 'form-control')) }}
                </div>


                {{ Form::submit('Criar Candidato', array('class' => 'btn btn-success m-3')) }}
                {!! Form::close() !!}
        </div>
    </div>

    <div class="pull-right ">
        <a class="btn btn-primary" href="{{ route('embates.index') }}">Voltar</a>
    </div>

</div>

@endsection
