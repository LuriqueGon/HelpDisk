<?php require_once 'head.php' ?>
<?php

  require_once 'autenticador.php';

?>
<body>

<?php require_once 'menu.php';?>

  <div class="container">    
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                
                <form method="POST" action="registraChamado.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" placeholder="Título" name="titulo">
                  </div>                  
                  <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="tipo">
                      <option value="CriacaoUsuario">Criação Usuário</option>
                      <option value="Impressora">Impressora</option>
                      <option value="Hardware">Hardware</option>
                      <option value="Software">Software</option>
                      <option value="Rede">Rede</option>
                    </select>
                  </div>                  
                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name="descricao"></textarea>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <a href="home.php">
                        <button class="btn btn-lg btn-warning btn-block" type="button">Voltar</button>
                      </a>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</body>
</html>