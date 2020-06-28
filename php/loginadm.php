<?php 
  session_start();

  //session_destroy();

    if (isset($_SESSION['Login'])=='OK') {
      header("Location:controle.php");
    }
  ?>

<!DOCTYPE html>
  <head>

    <title>Login administrador</title>

    <link rel="stylesheet" href="../css/estilologin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    <?php
      require_once "i_topo.php";
      ?>

    

        <form action="acesso.php" class="login-form" method="POST">
            <center><h2>Administrador:</h2></center>
          <div class="txtb">
            <input type="text" name="usuario">
            <span data-placeholder="Usuário"></span>
          </div>

          <div class="txtb">
            <input type="password" name="senha">
            <span data-placeholder="Senha"></span>
          </div>


        <?php 

          if(isset($_GET['error'])){
            echo "<span style='color:red'>Usuario ou Senha Invalidos!</span>";
          }
        ?>

        <input type="submit" class="logbtn" value="Logar" name="logar">

        </form>
      </body>
    </html>