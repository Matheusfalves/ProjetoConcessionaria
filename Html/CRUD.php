<?php
//Teste conexão

$conexao = mysql_connect ("localhost","Dba","V\eC0iYiqPosW)0H");
if ($conexao == TRUE){
echo"Conexão ok";
$banco = mysqli_select_db($conexao,"id13326589_cardatabase");
}
else{
echo "Falha ao conectar no servidor.";
}

//Inserção 
$sql = "inser into alunos $$nome values('$nome')";
$resultado = mysqli_query($conexao, $sql);
    if ($resultado){
    $numeroRegistros = mysqli_affected_rows($conexao);
    echo "Comando executado com sucesso.";
    echo "Foram afetados $numeroRegistros registros.";
    }
    else {
    echo "Falha ao executar comando.";
}


//Atualização

$sql = "update alunos set = $$nome where nomealuno = '$nome'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado){
$numeroRegistros = mysqli_affected_rows($conexao);
echo "Comando executado com sucesso.";
echo "Foram afetados $numeroRegistros registros.";
}else {
echo "Falha ao executar comando.";
}
mysqli_close($conexao);

//Delete

$sql = "delete from $nomealuno where nomealuno = '$nome'";
$resultado = mysqli_query($conexao, $sql);
if ($resultado){
$numeroRegistros = mysqli_affected_rows($conexao);
echo "Comando executado com sucesso.";
echo "Foram afetados $numeroRegistros registros.";
}else {
echo "Falha ao executar comando.";
}


//Select 

    $sql = "select codaluno, nomealuno from alunos";
    $resultado = mysqli_query($conexao, $sql);
        if ($resultado){
        while($registro = mysqli_fetch_array($resultado)){
        echo "Código do aluno: ".$registro["codaluno"];
        echo "Nome do aluno: ".$registro["nomealuno"];
        }
    }   

?>

//Tela com os selects
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Cadastro</title>
        </head>
        <body>
            <form action="?act=save" method="POST" name="form1" >
                <h1>Cadastro</h1>

                </br>
                
                Código Aluno:
               <input type="text" name="codaluno"></br>
                Email do Aluno
               <input type="text" name="Ealuno">
               <?php
 
               // Preenche o nome no campo nome com um valor "value"
               if (isset($codaluno) && $codaluno != null || $codaluno != "") {
                   echo "value=\"{$codaluno}\"";
               }
               ?> />
               Nome Aluno:
               <input type="text" name="nomealuno" <?php
 
               // Preenche o nomealuno no campo nomealuno com um valor "value"
               if (isset($nomealuno) && $nomealuno != null || $nomealuno != "") {
                   echo "value=\"{$nomealuno}\"";
               }
               if (isset($Ealuno) && $Ealuno != null || $Ealuno != "") {
                echo "value=\"{$Ealuno}\"";
                }
               ?> />
               
               <input type="submit" value="salvar" />
               <input type="reset" value="Novo" />
               <hr>
            </form>
            <table border="1" width="100%">
                <tr>
                    <th>Codigo Aluno</th>
                    <th>Nome Aluno</th>  
                    <th>Ações</th>
                </tr>
                <?php
 
                // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                try {
                    $stmt = $conexao->prepare("SELECT * FROM alunos");
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<tr>";
                            echo "<td>".$rs->nome."</td><td>".$rs->nomealuno."</td><td>
							 <center><a href=\"?act=upd&id=".$rs->id."\">[Alterar]</a>"
                                       ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                       ."<a href=\"?act=del&id=".$rs->id."\">[Excluir]</a></center></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Erro: Não foi possível recuperar os dados do banco de dados";
                    }
                } catch (PDOException $erro) {
                    echo "Erro: ".$erro->getMessage();
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nome = (isset($_POST["nomealuno"]) && $_POST["nomealuno"] != null) ? $_POST["nomealuno"] : "";
                    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
                } else if (!isset($id)) {
                    // Se não se não foi setado nenhum valor para variável $id
                    $nome = NULL;
                    $email = NULL;
                }
                ?>
            </table>
        </body>
    </html>