
<div class="container">
    <div class="jumbotron">
      <h1>Requerimento de serviço</h1>
    </div>


      <form name="dados" method="POST" action="{{route('requets.store')}}">
        @csrf

        <div class="container form-group">
          <label id="label1" for="subject_id">Tipo de protocolo:</label>
          <select id="subject_id" class="custom-select form-control box_style" name="subject_id" oninput="validarProtocolar('subject_id','alerta1','label1')">
            <option class="form-control" value="0" disabled selected>Selecione</option>
          @foreach ($protocolos as $p)
            <option class="form-control" value="{{ $p->id }}">{{ $p->name }}</option>
          @endforeach
        </select>

          <div id="alerta1" class="alert alert-danger" style="display:none">
            <span>Por favor, selecione um protocolo válido.</span>
          </div>

          <div class="form-group">
            <label id="label2" for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control"
            oninput="validarProtocolar('description','alerta2','label2')"></textarea>
          </div>

          <div id="alerta2" class="alert alert-danger" style="display:none">
            <span>Por favor, insira uma descrição válida.</span>
          </div>

          <div class="form-group">
            <label id="label3" for="date">Data esperada:</label>
            <input type="date" name="date" id="date" min=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 days'));?>
            max=<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 40 days'));?> class="form-control" onclick="validarProtocolar('subject_id','alerta1','label1')"
            oninput="validarProtocolar('date','alerta3','label3')">
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

        <div class="custom-control custom-switch">
          <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
          <input type="reset" name="limpar" value="Limpar" class="btn btn-primary" onclick="limpa()">
        </div>

      </form>
  </div>
