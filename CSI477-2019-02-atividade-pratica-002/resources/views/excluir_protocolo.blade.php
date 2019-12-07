@extends('view_base')

@section('navegacao')
  @include('nav_logado_company')
@endsection

@section('conteudo')
<div class="container">
  <h2>Deseja realmente excluir este protocolo?</h2>
  <form method="post" action="{{route('subjects.destroy',$id)}}">
    @csrf
    @method('DELETE')
    <a class="btn btn-primary" href="{{route('subjects.show',$id)}}">Não</a>
    <input class="btn btn-danger" type="submit" value="Sim">
  </form>
</div>
@endsection
