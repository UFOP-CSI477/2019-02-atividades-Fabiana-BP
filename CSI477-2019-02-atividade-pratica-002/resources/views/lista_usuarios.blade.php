<div class="container">
  <div class="jumbotron">
    <h1>Usuários do Sistema</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Usuários</caption>
      <thead>
          <tr>
              <th>Nome</th>
              <th>e-mail</th>
              <th>Data de cadastro</th>
              <th>Permissão</th>
          </tr>
      </thead>
      <tbody>

        @foreach ($users as $u)
          <tr>
          <td>{{$u->name}}</td>
          <td>{{$u->email}}</td>
          <td>{{date("d/m/Y", strtotime($u->created_at))}}</td>
          <td>
            @if($u->type==1)
              Administrador
            @endif
            @if($u->type==2)
              Usuário
            @endif
          </td>
        @endforeach

      </tbody>

  </table>
