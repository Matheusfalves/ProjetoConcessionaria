<?php

?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <head>
  <link rel="Stylesheet" type="text/css" href="estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
  <meta charset="utf-8">
  <title>Tela de Cadastro de veículo</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $("#valor").mask("#.##0,00", {reverse: true});
    
    function alerta(){
        alert("Veículo cadastrado com sucesso!");
        return true;
    }

    function Checkfiles(){
      var fup = document.getElementById('filename');
      var fileName = fup.value;
      var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if(ext =="jpeg" || ext=="png"){
        return true;
    }
    else{
        return false;
    }
    }
  </script>
 </head>
 <body>
  <ul id = "Menu">  
    <a href="indexLogado.html">Tela Principal</a></l6>
    <a href="Catalogo.html">Catalogo</a>
</ul>
  <div class="cadastroveiculo">
   <h1>Cadastro do Veículo</h1>
   <form  name="formveiculo" method="POST" action="DadosCarro.php" onsubmit="Checkfiles(this)"> 
   
    <p>Nome do Carro:</p>
    <input type="text" name="Carro" placeholder="Insira o nome do carro" required><br/>

     <p>Descrição do Carro:</p>
    <textarea type="text" name="Descricao" placeholder="Insira a descrição do carro" required></textarea><br />
    
     <p>Valor:</p>
    <input type="text" name="Valor" maxlength="14" placeholder="Insira o valor do carro" id="valor" required><br/>

    <p> Imagem do carro</p>
    <input type="file" name="imagem" accept="image/png, image/jpeg" id="filename"><br/>
    <br/>

    <input type="submit" name="" value="Cadastrar" onclick="return alerta()"><br />
    <a>
</form>

   
 </body>
</html>

