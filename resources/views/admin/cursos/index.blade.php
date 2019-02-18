@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

  <div class=container>
    <h3 class="center">Lista de Cursos</h3>

    @if ($registros->isEmpty())
      <div class="center-align">
        <h5 class="center">Você não tem nenhum curso cadastrado</h5>
      </div>
    @else

      <div class=row>
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Publicação</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              @foreach($registros as $registro)
              <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->titulo }}</td>
                <td>{{ $registro->descricao }}</td>
                <td><img height="60" src={{ asset($registro->imagem) }} alt="{{ $registro->titulo }}"/></td>
                <td>{{ $registro->publicado }}</td>
                <td>
                  <a class="btn green darken-4" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>
                  <a class="btn red" onclick="return confirm('Confirme que excluir o ID: {{ $registro->id }} e Titulo: {{ $registro->titulo }} ')" href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    @endif

    <div class="row">
      <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
    </div>
  </div>

@endsection
