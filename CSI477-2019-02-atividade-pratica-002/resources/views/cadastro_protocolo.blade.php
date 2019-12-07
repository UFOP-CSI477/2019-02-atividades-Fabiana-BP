
<div class="container">
    <div class="jumbotron">
      <h1>Cadastro de Protocolo</h1>
    </div>


      <form name="dados" method="POST" action="{{route('subjects.store')}}">
        @csrf

        <div class="container form-group">
          <div class="form-group">
            <label id="label1" for="name">Nome do protocolo:</label>
            <input type="text" name="name" id="name" class="form-control" oninput="validarProtocolo('name','alerta2','label1')">
          </div>

          <div id="alerta2" class="alert alert-danger" style="display:none">
            <span>Por favor, insira um nome válido.</span>
          </div>

          <div class="form-group">
            <label id="label2" for="price">Preço:</label>
            <input type="text" name="price" id="price" class="form-control"  oninput="validarProtocolo('price','alerta3','label2')">
          </div>

          <div id="alerta3" class="alert alert-danger" style="display:none">
            <span>Por favor, insira um valor válido.</span>
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
