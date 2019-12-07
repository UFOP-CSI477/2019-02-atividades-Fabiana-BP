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
      <form method="post" action="{{ route('requets.update', $requet->id) }}">

        @csrf
        @method('PATCH')
        <div class="form-group">
          <label id="label1" for="subject_id">Tipo de protocolo:</label>
          <select id="subject_id" class="custom-select form-control box_style" name="subject_id">
            <option class="form-control" value="0" disabled selected>Selecione</option>
          @foreach ($protocolos as $p)
            <option class="form-control" value="{{ $p->id }}"
              @if($requet->subject_id == $p->id)
                selected
              @endif
              >{{ $p->name }}</option>
          @endforeach
        </select>
        </div>
        <div class="form-group">
          <label id="label3" for="description">Descrição:</label>
          <textarea name="description" class="form-control"
          oninput="validarProtocolar('description','alerta2','label3')">{{$requet->description}}</textarea>
        </div>

        <div id="alerta2" class="alert alert-danger" style="display:none">
          <span>Por favor, insira uma descrição válida.</span>
        </div>

        <div class="form-group">
          <label id="label4" for="date">Data:</label>
          <input type="date" name="date" value="{{$requet->date}}" class="form-control"
          oninput="validarProtocolar('date','alerta3','label4')">
        </div>

        <div id="alerta3" class="alert alert-danger" style="display:none">
          <span>Por favor, insira uma data válida.</span>
        </div>

        @if(isset($errors) && count($errors)>0)
          <div class="form-group">
            <div id="alerta1" class="alert alert-danger" style="display: block">
              <span>Por favor, insira dados válidos!</span>
            </div>
          </div>
        @endif

        <div class="custom-control">
          <a href="{{route('requets.show',$requet->id)}}" class="btn btn-primary">Voltar</a>
          <input type="submit" value="Confirmar" class="btn btn-primary">
        </div>
      </form>

    </div>
</div>

@endsection
