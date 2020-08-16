@extends('view_base')

@section('navegacao')
  @include('nav_estudante')
@endsection

@section('conteudo')


    @if($nav==1)
      @include('pesquisar_professores')
    @endif
    @if($nav==2)
      @include('visualizar_projetos')
    @endif
    @if($nav==3)
      @include('pesquisar_professores')
    @endif
    @if($nav==4)
      @include('filtro_professores')
    @endif

@endsection
