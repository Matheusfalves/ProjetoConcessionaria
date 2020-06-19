<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <body>
  <div class="cadastro>
   <img src="Definir Imagem">
   <h1>Cadastro</h1>
   <form>
   
    <p>Usuário:</p>
    <input type="text" name="" placeholder="Insira seu nome de usuário"><br />
     <p>E-mail:</p>
    <input type="text" name="" placeholder="Insira seu e-mail"><br />
    
     <p>Confirme o e-mail:</p>
    <input type="text" name="" placeholder="Insira seu e-mail"><br />
    
    <p>Senha:</p>
    <input type="password" name="" placeholder="Insira sua senha"><br />
    
     <p>Confirme a senha:</p>
    <input type="text" name="" placeholder="Insira sua senha"><br />
    
     <p>Data de Nascimento:</p>
    <input type="text" name="" placeholder="Insira sua data de nascimento"><br />
    
     <p>Sexo:</p>
    <input type="text" name="" placeholder="Insira seu sexo"><br />
    
     <p>Estado Cívil:</p>
    <input type="text" name="" placeholder="Insira seu estado cívil"><br />
     <p>Telefone Celular:</p>
    <input type="text" name="" placeholder="Insira seu telefone celular"><br />
     <p>Telefone Residencial:</p>
    <input type="text" name="" placeholder="Insira seu telefone residencial"><br />
     <p>Endereço:</p>
    <input type="text" name="" placeholder="Insira seu endereço"><br />
    "<br />
    <input type="submit" name="" value="Cadastrar"><br />

</form>
<?php
if(isset($_POST["Cadastrar"])){
  $nome=$_POST["fnome"];
  $email=$_POST["femail"];
  $senha=$_POST["fsenha"];
  $dataNas=$_POST["dataNas"];
  $Sexo=$_POST["fsexo"];
  echo "<br>o usuario foi cadastrado $vnome com sucesso ";
}
else{
  echo "<br>O usuario nao foi cadastrado com sucesso";
}
?>
 
 </body>
</html>