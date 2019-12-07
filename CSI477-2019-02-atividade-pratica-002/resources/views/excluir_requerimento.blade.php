@extends('view_base')

@section('navegacao')
  @include('nav_logado_client')
@endsection

@section('conteudo')
<div class="container">
  <h2>Deseja realmente excluir este requerimento?</h2>
  <form method="post" action="{{route('requets.destroy',$id)}}">
    @csrf
    @method('DELETE')
    <a class="btn btn-primary" href="{{route('requets.show',$id)}}">Não</a>
    <input class="btn btn-danger" type="submit" value="Sim">
  </form>
</div>
@endsection
