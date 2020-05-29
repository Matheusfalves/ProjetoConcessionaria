
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
    <input type="submit" name="" value="Login"><br />
    <a href="Cadastro_usuario.html"> Ainda não possui uma conta? click aqui </a> </a>
   </form>
 <br/>
<?php
$Vlogin = array("Funcionario","ADM","Gerente","Matheus","Joao","Gabriel","Victor","Gustavo");
$VSenha = array("1234","ADM","GER1234","mata1@1","joao1@1","Gabr1@1","vict1@1","gust1@1");

for($i=0; $i<=count($Vlogin);$i++){
   if($_POST["Login"] = $Vlogin[$i] and $_POST["Senha"]=$VSenha[$i]){
      echo "O usuario foi logado com sucesso";
      //header("indexLogado.html");
      echo "<a href='indexLogado.html'> Pagina inicial </a>";
   break;
   }
   else{
      echo "Você tem de se registrar para entrar";
   }  
}
?>
 </body>
</html>