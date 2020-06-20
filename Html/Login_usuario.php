
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <head>
  <link rel="stylesheet" type="text/css" href="EstiloProvisorio.css">
  <meta charset="utf-8">
  <title>Tela de Login</title>
 </head>
 <body>
  <div class="login">
   <img src="C:\Users\USUARIO\Desktop\AdminLTE-2.4.18\login\bgop2.jpg" class="usuario" width="100" height="100" alt="">
   <h1>Login</h1>
   <form  method="post">
   
    <p>Usuário:</p>
    <input type="text" name="Login" placeholder="Insira seu nome de usuário"><br />
    
    <p>Senha:</p>
    <input type="password" name="Senha" placeholder="Insira sua senha"><br /><br />
    <input type="submit" name="sub" value="input" ><br />
    <a href="Cadastro_usuario.html"> Ainda não possui uma conta? click aqui</a> </a>
   </form>
 <br/>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "treino";

$login = $_POST["Login"];
$senha = $_POST["Senha"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
   $sql = "SELECT nome, senha FROM pessoas WHERE nome ='$login' and senha = '$senha'";
   $result = mysqli_query($conn, $sql);
   
      if (mysqli_num_rows($result) == 1) {
            echo "logado com sucesso!";
            include_once("indexLogado.html");
      } 
      else {
         echo "Não encontrado, efetuar o login de novo ou se cadastre em nosso site";
         include_once("Login_usuario.php"); 
      }   
mysqli_close($conn);


?>
 </body>
</html>