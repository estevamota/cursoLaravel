@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

  <div class=container>
    <h3 class="center">Home</h3>

    <div class="row">
      @foreach ($cursos as $curso)
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="{{ asset($curso->imagem) }}">
            </div>
            <div class="card-content">
              <h4>{{ $curso->titulo }}</h4>
              <h4>{{ $curso->descricao }}</h4>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row" align="center">
        {{ $cursos->links()}}
      </div>
  </div>

@endsection
