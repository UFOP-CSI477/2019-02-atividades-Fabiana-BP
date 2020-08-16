<div class="container">
    <div class="jumbotron">
      <h1>Pesquise os professores por área</h1>
    </div>
      <form name="dados" method="POST" action="/professores">
        @csrf
        <div class="row">
          <div class="col">
            <input class="container form-control" type="search" name="pesquisa">
          </div>
          <div class="col">
            <div class="custom-control custom-switch">
              <input type="submit" name="incluir" value="Pesquisar" class="btn btn-primary">
            </div>
          </div>
        </div>

      </form>
    </div>
