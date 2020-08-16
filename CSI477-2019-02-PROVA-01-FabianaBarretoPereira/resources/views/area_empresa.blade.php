@extends('view_base')

@section('navegacao')
  @include('nav_empresa')
@endsection

@section('conteudo')
<div class="row">
  <div class="col-2 table-primary" style="background-color:#6959CDC">
    <div class="container navbar-toggler">
      <a href="{{route('projeto.index')}}" style="color:black">Relatório de Projetos</a>
    </div>
    <div class="container navbar-toggler">
      <a href="{{route('projeto.create')}}" style="color:black">Incluir Projeto</a>
    </div>
    <div class="container navbar-toggler">
      <a href="{{route('professores.index')}}" style="color:black">Relatório de Professores</a>
    </div>
    <div class="container navbar-toggler">
      <a href="{{route('alunos.index')}}" style="color:black">Relatório de Estudantes</a>
    </div>


  </div>

  <div class="col-10">

    @if($nav==1)
      @include('visualizar_projetos')
    @endif
    @if($nav==2)
      @include('incluir_projeto')
    @endif
    @if($nav==3)
      @include('relatorio_professores')
    @endif
    @if($nav==4)
      @include('relatorio_alunos')
    @endif


  </div>
</div>
@endsection
