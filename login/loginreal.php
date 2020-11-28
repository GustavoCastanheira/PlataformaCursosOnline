<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>.:: Trabalho ::.</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="login.php" class="sign-in-form" method="POST">
            <h2 class="title">Entrar</h2>

              <?php
                 if(isset($_SESSION['nao_autenticado'])):   
              ?>

            <p class="erro" >Usuário ou Senha Inválido</p>

            <?php
          endif;
          unset($_SESSION['nao_autenticado']);
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuário" name="usuario" autocomplete="off" />
            </div><!--input-field-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" name="senha" />
            </div><!--input-field-->
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Ou faça login usando redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><!--social-media-->
          </form><!--sign-in-form-->

          <form  method="POST" action="cadastrar.php" class="sign-up-form">
            <h2 class="title">Cadastre-se</h2>

              <?php
                if(isset($_SESSION['status_cadastro'])):  
              ?>

              <p class="erro" >Cadastro efetuado!</p>
              <p class="erro">Faça login informando o usuário e a senha</p>

               <?php
                endif;
                unset($_SESSION['status_cadastro']);
              ?>

              <?php
                if(isset($_SESSION['usuario_existe'])):  
              ?>
              <p class="erro">O usuário informado ja existe!</p>

              <?php
                endif;
                unset($_SESSION['usuario_existe']);
              ?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuário" name="usuario" autocomplete="off"/>
            </div><!--input-field-->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" autocomplete="off"/>
            </div><!--input-field-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" name="senha"/>
            </div><!--input-field-->
            <input type="submit" class="btn" value="Cadastrar" />
            <p class="social-text">Ou faça login usando redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><!--social-media-->
          </form><!--sign-up-form-->
        </div><!--signin-signup-->
      </div><!--forms-container-->

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Não possui cadastro?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Cadastre-se
            </button>
          </div><!--content-->
          <img src="img/log.svg" class="image" alt="" />
        </div><!--panel left-panel-->
        <div class="panel right-panel">
          <div class="content">
            <h3>Ja possui cadastro?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div><!--content-->
          <img src="img/register.svg" class="image" alt="" />
        </div><!--panel right-panel-->
      </div><!--panels-container-->
    </div><!--container-->

    <script src="js/script.js"></script>
  </body>
</html>
