<div class="container">
  <div class="jumbotron">
    <h1>Requerimentos</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Requerimentos de protocolos</caption>
      <thead>
          <tr>
              <th>Solicitante</th>
              <th>Tipo de Protocolo</th>
              <th>Descrição</th>
              <th>Data solicitada</th>
              <th>Valor</th>
          </tr>
      </thead>
      <tbody>
        <?php $soma=0;?>
        @foreach ($requets as $r)
        <tr>
          <td>{{$r->user->name}}</td>
          <td>{{$r->subject->name}}</td>
          <td>{{$r->description}}</td>
          <td>{{date("d/m/Y", strtotime($r->date))}}</td>
          <td>{{$r->subject->price}}</td>
          <td><a href="{{route('requets.show',$r->id)}}" class='btn btn-primary'>Exibir</a></td>
        </tr>
        <?php $soma=$soma+ $r->subject->price;?>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <td colspan="4"><strong>Valor Total</strong></td>
          <td colspan="1"><strong>{{$soma}}</strong></td>
        </tr>
        <tr>
          <td colspan="4"><strong>Quantidade Total</strong></td>
          <td colspan="1"><strong>{{$requets->count()}}</strong></td>
        </tr>
      </tfoot>

  </table>
