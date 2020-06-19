
    <?php
    //Teste conexão
    public function Connect(){
        $conexao = mysql_connect ("localhost","Dba","V\eC0iYiqPosW)0H");
        if ($conexao == TRUE){
        echo"Conexão ok";
        $banco = mysqli_select_db($conexao,"id13326589_cardatabase");
        }
        else{
        echo "Falha ao conectar no servidor.";  
        }
    }   
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <head>
  <link rel="Stylesheet" type="text/css" href="estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
  <meta charset="utf-8">
  <title>Tela de testar conexão</title>
 </head>
 <body>
   <h1>TESTE DE Conexão</h1>

    <button>Click Aqui</button>
</body>
</html>
