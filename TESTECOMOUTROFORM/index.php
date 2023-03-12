<?php
//include_once('config.php');
if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $cpf = $_POST['cpf'];
  $numero = $_POST['numero'];


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firn.css">
</head>
<body>
<?php
 
 

  
?>
    <form action="index.php" method="POST">
        <div class="input-boxes">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="nome"placeholder="Digite seu nome" required>
          </div>
          <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email"placeholder="Digite seu email" required>
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
          </div>
          <div class="input-box">
            <i class="fas fa-book"></i>
            <input type="password" name="cpf"placeholder="Digite seu cpf" required>
          </div>
          <div class="input-box">
            <i class="fas fa-phone"></i>
            <input type="tel" nome="numero"placeholder="Digite seu numero" required>
          </div>
          <div class="button input-box">
            <input type="submit" name="submit" value="Enviar">
          </div>
          <div class="input-box"><input type="hidden" name="form" value="f_form"></div>
          <div class="text sign-up-text">Já tem uma conta? <label for="flip">Conecte-se agora</label></div>
        </div>
  </form>
     
     
</body>
</html>