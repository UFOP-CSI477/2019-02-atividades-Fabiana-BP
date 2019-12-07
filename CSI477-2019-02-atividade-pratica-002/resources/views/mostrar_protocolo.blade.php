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
      <h2>Protocolo: {{$subject->name}}</h2>
      <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" name="price" value="{{$subject->price}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="created_at">Criado em:</label>
        <input type="text" name="created_at" value="{{date("d/m/Y", strtotime($subject->created_at))}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="updated_at">Atualizado em:</label>
        <input type="text" name="updated_at" value="{{date("d/m/Y", strtotime($subject->updated_at))}}" class="form-control" disabled>
      </div>
      <div class="custom-control">
        <a href="/index_company" class="btn btn-primary ">Voltar</a>
        <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-primary">Editar</a>
        <a href="/delete/subject/{{$subject->id}}" class="btn btn-primary">Excluir</a>
      </div>
    </div>
  </div>
</div>
@endsection
