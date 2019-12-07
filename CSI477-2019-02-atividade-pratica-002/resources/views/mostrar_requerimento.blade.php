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
    <div class="container">
      <h2>Protocolo: {{$requet->subject->name}}</h2>
      <div class="form-group">
        <label for="description">Descrição:</label>
        <input type="text" name="description" value="{{$requet->description}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="date">Data:</label>
        <input type="text" name="date" value="{{date("d/m/Y", strtotime($requet->date))}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" name="price" value="{{$requet->subject->price}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="created_at">Solicitado em:</label>
        <input type="text" name="created_at" value="{{date("d/m/Y", strtotime($requet->created_at))}}" class="form-control" disabled>
      </div>
      <div class="form-group">
        <label for="updated_at">Atualizado em:</label>
        <input type="text" name="updated_at" value="{{date("d/m/Y", strtotime($requet->updated_at))}}" class="form-control" disabled>
      </div>
      <div class="custom-control">
        <a href="/index_client/4" class="btn btn-primary ">Voltar</a>
        <a href="{{route('requets.edit',$requet->id)}}" class="btn btn-primary">Editar</a>
        <a href="/delete/requet/{{$requet->id}}" class="btn btn-primary">Excluir</a>
      </div>
    </div>
  </div>
</div>
@endsection
