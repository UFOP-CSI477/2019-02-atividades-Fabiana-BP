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
        <?php
        $aux=0;
        foreach ($protocolos as $p) {
          echo "<tr>";
          echo "<td id='n$aux'>$p->name</td>";
          echo "<td id='p$aux'>$p->price</td>";
          echo "</tr>";
          $aux=$aux+1;
        }
         ?>
      </tbody>

  </table>
