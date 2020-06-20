<?php

?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <script 
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
 
  <script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
    $('#data').mask("00/00/0000");

    function validar(){
      var email = formuser.email.value;
      var cEmail = formuser.cEmail.value;
      var senha = formuser.senha.value;
      var cSenha = formuser.cSenha.value;

      if(email != cEmail){
        alert('E-mails diferentes');
        return false;
      }
      
      if(senha != cSenha){
        alert('senhas diferentes');
        return false;
      }
      
      if(senha.length > 8){
        alert('Cadastro Realizado com sucesso');
        return true;
      }
    }
</script>
</head>
 <body>
    <ul id = "Menu">  
      <a href="Index.html">Pagina inicial</a>
      <a href="Login_usuario.html">Logar conta</a> 
  </ul>
  <div class="cadastro">
    <img src="Logotipocarro4.png" width="250" height="250" >
  <h1>Cadastro</h1>
  <form name="formuser" role="form" method="POST" action="dados.php" autocomplete="off">
    <fieldset>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="user" placeholder="Insira seu nome" required><br/>
      </div><br/>

       <div class="form-group">
         <label for="emailUser">E-mail</label>
        <input type="email" class="form-control" id="emailUser" name="email" placeholder="Insira seu e-mail" required><br/>
       </div><br/>

       <div class="form-group">
        <label for="CemailUser">Confirme o seu e-mail</label>
       <input type="email" class="form-control" id="CemailUser" name="cEmail" placeholder="Insira seu e-mail" required><br/>
      </div><br/>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" minlength="8" class="form-control" id="senha" name="senha" placeholder="Insira sua senha" required><br/>
      </div><br/>
      
      <div class="form-group">
        <label for="Csenha">Confirme sua senha</label>
        <input type="password" minlength="6" class="form-control" id="cSenha" name="cSenha" placeholder="Insira sua senha" required><br/>
      </div><br/>
      
      <div class="form-group">
        <label for="nascimento">Data de nascimento</label>
        <input type="text" class="form-control" id="data" name="dataN"><br/>
      </div>
    
      <p>Sexo</p>
      <input type="radio" name="UIUISEXO" value="masculino"> Masculino
      <input type="radio" name="UIUISEXO" value="feminino"> Feminino
      <input type="radio" name="UIUISEXO" value="outro"> Outro<br/>
      
       <p>Estado Cívil</p>
      <input type="radio" name="eCivil" value="solteiro"> Solteiro
      <input type="radio" name="eCivil" value="casado"> Casado
      <input type="radio" name="eCivil" value="viuvo"> Viúvo
      <input Type="radio" name="eCivil" value="outro"> Outro<br/>
      <br/>

      <div class="form-group">
        <label for="celular">Celular</label>
        <input type="text" name="cel" class="form-control" maxlength="15" id="celular" placeholder="Insira seu telefone celular"><br/>
      </div><br/>

      <div class="form-group">
        <label for="telefone">Telefone residencial</label>
        <input type="text" class="form-control" maxlength="14" name="tel" id="telefone" placeholder="Insira seu telefone residencial"><br/>
      </div><br/>

      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Insira seu endereço"><br/>
      </div><br/>

      <input type="submit" name="botao" value="Cadastrar" onclick="return validar()"><br/>
    </fieldset>
  </form>


 
 </body>
</html>