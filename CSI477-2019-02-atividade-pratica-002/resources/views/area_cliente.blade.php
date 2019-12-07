@extends('view_base')

@section('navegacao')
  @include('nav_logado_client')
@endsection

@section('conteudo')
<div class="row">
  <div class="col-2 table-primary">
    <div class="container navbar-toggler">
      <a href="{{route('requets.create')}}" style="color:black">Protocolar</a>
    </div>
    <div class="container navbar-toggler">
      <a href="/index_client/4" style="color:black">Visualizar Requerimentos</a>
    </div>
  </div>
  <div class="col-10">

    @if($nav==1)
      @include('visualizar_protocolos')
    @endif
    @if($nav==2)
    @endif
    @if($nav==3)
      @include('protocolar')
    @endif
    @if($nav==4)
      @include('lista_solicitacoes_user')
    @endif


  </div>
</div>
@endsection
