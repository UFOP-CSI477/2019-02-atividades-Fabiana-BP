<div class="container">
  <div class="jumbotron">
    <h1>Professores</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Relação de Professores</caption>
      <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Área</th>
          </tr>
      </thead>
      <tbody>


        @foreach ($professors as $p)
          <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->area}}</td>
          </tr>
        @endforeach

      </tbody>

  </table>
</div>
