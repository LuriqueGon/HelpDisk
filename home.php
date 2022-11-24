<?php require_once 'head.php' ?>
<?php require_once 'autenticador.php';?>
<body>
    <?php require_once 'menu.php';?>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrirChamado.php">
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                    <p>Abrir chamados</p>
                </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultarChamado.php">
                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                    <p>Consultar chamados</p>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>