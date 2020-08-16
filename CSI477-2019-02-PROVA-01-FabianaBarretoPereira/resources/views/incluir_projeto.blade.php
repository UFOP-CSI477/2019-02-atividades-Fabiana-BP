<div class="container">
    <div class="jumbotron">
      <h1>Incluir Projeto</h1>
    </div>
      <form name="dados" method="POST" action="{{route('projeto.store')}}">
        @csrf

        <div class="container form-group">
          <label id="label1" for="aluno_id">Aluno:</label>
          <select id="aluno_id" class="custom-select form-control box_style" name="aluno_id"
          oninput="validarProjeto('aluno_id','label1')">
            <option class="form-control" value="0" disabled selected>Selecione</option>
              @foreach ($alunos as $a)
                <option class="form-control" value="{{ $a->id }}">{{ $a->nome }}</option>
              @endforeach
          </select>


          <label id="label2" for="professor_id">Professor:</label>
          <select id="professor_id" class="custom-select form-control box_style" name="professor_id"
          oninput="validarProjeto('professor_id','label2')">
            <option class="form-control" value="0" disabled selected>Selecione</option>
              @foreach ($professors as $p)
                <option class="form-control" value="{{ $p->id }}">{{ $p->nome }}</option>
              @endforeach
          </select>


          <div class="form-group">
            <label id="label3" for="titulo">Título:</label>
            <textarea name="titulo" id="titulo" class="form-control"
            oninput="validarProjeto('titulo','label3')"></textarea>
          </div>


          <div class="form-group">
            <label id="label4" for="ano">Ano:</label>
            <input type="ano" name="ano" id="ano" class="form-control"
            oninput="validarProjeto('ano','label4')">
          </div>


          <div class="form-group form-check">
              <input class="form-check-input" id="1" type="radio"  checked value="1" name="semestre">
              <label for="1" class="form-check" >{{ __('1 semestre') }}</label>

              <input type="radio" id="2" value="2" name="semestre" class="form-check-input">
              <label for="2" class="form-check">{{ __('2 semestre') }}</label>
          </div>


          @if(isset($errors) && count($errors)>0)
            <div class="form-group">
              <div class="alert alert-danger" style="display: block">
                <span>Por favor, insira dados válidos!</span>
              </div>
            </div>
          @endif

        <div class="custom-control custom-switch">
          <input type="submit" value="Incluir" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary" onclick="limpa()">
        </div>

      </form>
