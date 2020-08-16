<div class="container">
  <div class="jumbotron">
    <h1>Estudantes de TCC</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Relação de Estudantes de TCC</caption>
      <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Curso</th>
          </tr>
      </thead>
      <tbody>


        @foreach ($alunos as $a)
          <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->nome}}</td>
            <td>{{$a->curso}}</td>
          </tr>
        @endforeach

      </tbody>

  </table>
</div>
