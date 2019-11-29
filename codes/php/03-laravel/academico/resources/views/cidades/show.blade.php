@extends('principal')

@section('conteudo')

  <h1>Cidade: {{ $cidade->nome }} </h1>

  <p>Código: {{ $cidade->id}} </p>
  <p>Nome: {{ $cidade->nome}} </p>
  <p>Estado: {{ $cidade->estado->nome}} </p>
  <p>Data da criação: {{ $cidade->created_at}} </p>
  <p>Última atualização: {{ $cidade->created_at}} </p>

  <!-- Voltar para a lista de cidades -->
  <a class="btn btn-primary" href="{{ route('cidades.index')}}">Voltar</a>

  <!-- Editar a cidade corrente -->
  <a class="btn btn-info" href="{{ route('cidades.edit', $cidade->id)}}">Editar</a>
  <!-- Excluir a cidade -->


@endsection
