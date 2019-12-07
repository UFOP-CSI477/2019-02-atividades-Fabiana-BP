<div class="container">
  <div class="jumbotron">
    <h1>Requerimentos que podem ser solicitados à Escola A</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Tipos de protocolos</caption>
      <thead>
          <tr>
              <th>Nome</th>
              <th>Preço</th>
          </tr>
      </thead>
      <tbody>

        @foreach ($protocolos as $p)
          <tr>
          <td>{{$p->name}}</td>
          <td>{{$p->price}}</td>
          <td><a href="{{route('subjects.show',$p->id)}}" class='btn btn-primary'>Exibir</a></td>
        @endforeach

      </tbody>

  </table>
