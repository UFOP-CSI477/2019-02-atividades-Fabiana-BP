@extends('view_base')
@section('navegacao')
  @include('nav_inicial')
@endsection
@section('conteudo')
<div class="container">
    <div class="jumbotron">
      <h1>Cadastro</h1>
    </div>


      <form name="dados" method="POST" action="{{route('users.store')}}" >

        @csrf


        <div class="container form-group">
          <div class="form-group">
            <label id="label1" for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nome Completo" oninput="validarUsuario('name','alerta1','label1')">
          </div>

          <div id="alerta1" class="alert alert-danger" style="display:none" >
            <span>Por favor, insira um nome válido.</span>
          </div>

          <div class="form-group">
            <label id="label2" for="email">e-mail:</label>
            <input type="text" name="email" id="email" placeholder="e-mail" class="form-control" oninput="validarUsuario('email','alerta2','label2')">
          </div>

          <div id="alerta2" class="alert alert-danger" style="display:none">
            <span>Por favor, insira um e-mail válido.</span>
          </div>


          <div class="form-group">
            <label id="label3" for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="******" oninput="validarUsuario('senha','alerta3','label3')">
          </div>

          <div id="alerta3" class="alert alert-danger" style="display:none">
            <span>Por favor, insira uma senha válida.</span>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="usuario" type="radio"  checked value="2" name="type">
            <label for="usuario" class="form-check" >Cliente</label>
            <input type="radio" id="admin" value="1" name="type" class="form-check-input" onclick="validarUsuario('senha','alerta3','label3')">
            <label for="admin" class="form-check">Administrador</label>
          </div>
          @if(isset($errors) && count($errors)>0)
            <div class="form-group">
              <div id="alerta1" class="alert alert-danger" style="display: block">
                <span>Por favor, insira dados válidos!</span>
              </div>
            </div>
          @endif

            <div class="custom-control custom-switch">
              <input type="submit" name="cadastrar_usuario" value="Cadastrar" class="btn btn-primary">
              <input type="reset" name="limpar" value="Limpar" class="btn btn-primary" onclick="limpa()">
            </div>

      </form>
  </div>
@endsection
