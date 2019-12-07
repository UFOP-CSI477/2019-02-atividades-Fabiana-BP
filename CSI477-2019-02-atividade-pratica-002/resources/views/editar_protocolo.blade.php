@extends('view_base')

@section('navegacao')
  @include('nav_logado_company')
@endsection

@section('conteudo')
<div class="row">
  <div class="col-2 table-primary">
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
    <div class="container">
      <form method="post" action="{{ route('subjects.update', $subject->id) }}">

        @csrf
        @method('PATCH')
        <div class="form-group">
          <label id="label2" for="name">Protocolo:</label>
          <input type="text" name="name" value="{{$subject->name}}" class="form-control" oninput="validarProtocolo('name','alerta2','label2')">
        </div>

        <div id="alerta2" class="alert alert-danger" style="display:none">
          <span>Por favor, insira um nome válido.</span>
        </div>

        <div class="form-group">
          <label id="label3" for="price">Preço:</label>
          <input type="text" name="price" value="{{$subject->price}}" class="form-control" oninput="validarProtocolo('price','alerta3','label3')">
        </div>

        <div id="alerta3" class="alert alert-danger" style="display:none">
          <span>Por favor, insira um valor válido.</span>
        </div>

        <div class="custom-control">
          <a href="{{route('subjects.show',$subject->id)}}" class="btn btn-primary">Voltar</a>
          <input type="submit" value="Confirmar" class="btn btn-primary">
        </div>
      </form>
      @if(isset($errors) && count($errors)>0)
        <div class="form-group">
          <div id="alerta1" class="alert alert-danger" style="display: block">
            <span>Por favor, insira dados válidos!</span>
          </div>
        </div>
      @endif
    </div>
</div>

@endsection
