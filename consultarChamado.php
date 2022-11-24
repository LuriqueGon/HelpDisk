<?php require_once 'head.php'; ?>
<?php require_once 'autenticador.php'; ?>
<?php

  $chamados = array();
  $arquivo = fopen('../HelpDisk/dados.hd','r');

  while(!feof($arquivo)){
    $dados = fgets($arquivo);
    $chamados[] = $dados;
  }

  fclose($arquivo);

?>
<body>

<?php require_once 'menu.php';?>

  <div class="container">    
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamados
          </div>
          
          <div class="card-body">
            
            <?php foreach($chamados as $chamado): ?>  
              <?php $chamadoDados = explode('#',$chamado);?>
              
              <?php if($_SESSION['perfilId'] == 0){
                if($_SESSION['id'] != $chamadoDados['0']){
                  continue;
                }
              }
              ?>

              <?php if( count($chamadoDados) < 3 ){ continue;} ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $chamadoDados[1]; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamadoDados[2]; ?></h6>
                    <p class="card-text"><?php echo $chamadoDados[3];?></p>
                  </div>
                </div>

            <?php endforeach; ?>  

            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php"><button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>