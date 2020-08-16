<div class="container">
  <div class="jumbotron">
    <h1>Projetos de TCC</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Relação de Projetos de TCC</caption>
      <thead>
          <tr>
              <th>Ano</th>
              <th>Semestre</th>
              <th>ID</th>
              <th>Professor</th>
              <th>Estudante</th>
              <th>Título</th>
              <th>Área</th>
          </tr>
      </thead>
      <tbody>


        @foreach ($projetos as $p)
          <tr>
            <td>{{$p->ano}}</td>
            <td>{{$p->semestre}}</td>
            <td>{{$p->id}}</td>
            <td>{{$p->professor}}</td>
            <td>{{$p->aluno}}</td>
            <td>{{$p->titulo}}</td>
            <td>{{$p->area}}</td>
          </tr>
        @endforeach

      </tbody>

  </table>
</div>
