@extends('view_base')

@section('navegacao')
  @include('nav_logado_company')
@endsection

@section('conteudo')
<div class="row">
  <div class="col-2 table-primary" style="background-color:#6959CDC">
    <div class="container navbar-toggler">
      <a href="{{route('subjects.create')}}" style="color:black">Cadastrar protocolo</a>
    </div>
    <div class="container navbar-toggler">
      <a href="/index_company/4" style="color:black">Visualizar solicitações</a>
    </div>
    <div class="container navbar-toggler">
      <a href="/index_company/5" style="color:black">Visualizar usuários</a>
    </div>
    <div class="container navbar-toggler">
      <a href="/index_company/6" style="color:black">Visualizar relatório</a>
    </div>
  </div>

  <div class="col-10">

    @if($nav==1)
      @include('acao_protocolos')
    @endif
    @if($nav==3)
      @include('cadastro_protocolo')
    @endif
    @if($nav==4)
      @include('lista_solicitacoes')
    @endif
    @if($nav==5)
      @include('lista_usuarios')
    @endif
    @if($nav==6)
      @include('visualiza_relatorio')
    @endif

  </div>
</div>
@endsection
