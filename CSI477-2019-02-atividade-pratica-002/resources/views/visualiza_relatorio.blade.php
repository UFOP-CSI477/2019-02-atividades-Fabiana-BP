<div class="container">
  <div class="jumbotron">
    <h1>Relatório</h1>
  </div>

  <table class="table table-bordered table-hover table-striped">
      <caption>Total de requerimentos por tipos de protocolos</caption>
      <thead>
          <tr>
              <th>Tipo de Protocolo</th>
              <th>Total de requerimentos</th>
          </tr>
      </thead>
      <tbody>
        <?php $soma=0; ?>
        @foreach ($subjects as $s)
        <tr>
          <td>{{$s->name}}</td>
          <td>{{$s->requets->count()}}</td>
        </tr>
        <?php $soma=$soma+$s->requets->count(); ?>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>{{$soma}}</strong></td>
        </tr>
      </tfoot>
  </table>

  <table class="table table-bordered table-hover table-striped">
      <caption>Total de requerimentos por usuários</caption>
      <thead>
          <tr>
              <th>Usuário</th>
              <th>Total de requerimentos</th>
              <th>Valor total de requerimentos</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($users as $u)
          <tr>
          <td>{{$u->name}}</td>
          <?php $soma=0; ?>
          @foreach ($u->requets as $r)
            <?php $soma=$soma + ($r->subject->price);?>
          @endforeach
          <td>{{$u->requets->count()}}</td>
          <td>{{$soma}}</td>

        @endforeach

      </tbody>
  </table>
