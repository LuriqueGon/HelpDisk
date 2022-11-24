<?php require_once 'head.php'; ?>
<?php

  session_start();  

?>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">    
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            
            <form method="POST" action="./validaLogin.php" >

              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail - Login" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="senha">
              </div>
              <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'):?>
                <div class="text-danger text-center mb-2">usuario ou senha invalido (s)</div>
              <?php endif;?>
              <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'):?>
                <div class="text-danger text-center mb-2">Faça login antes de acessar a páginas restristas</div>
              <?php endif;?>
              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

            </form>

          </div>
        </div>
      </div>
  </div>
</body>
</html>