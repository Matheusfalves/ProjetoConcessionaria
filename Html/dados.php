<!DOCTYPE html>
<html lang="pt-BR" >
<head>
    <title>"Autentication"</title>
</head>
<body>
    <ul id = "Menu">  
            <a href="Index.html">Pagina inicial</a>
            <a href="Login_usuario.html">Logar conta</a> 
    </ul>
<?php
$Vlogin = array("Funcionario","ADM","Gerente","Matheus","Joao","Gabriel","Victor","Gustavo");
$VSenha = array("1234","ADM","GER1234","mata1@1","joao1@1","Gabr1@1","vict1@1","gust1@1");
$user=$_GET["User"];
$email=$_GET["Email"];
$senha=$_GET["Senha"];
$CEmail=$_GET["CEmail"];
$CSenha=$_GET["CSenha"];
$dataNas=$_GET["DataN"];
$Sexo=$_GET["UIUISEXO"];
$ESTADOCIVIL=$_GET["Ecivil"];
$TELEFONEC=$_GET["TELC"];
$TELEFONER=$_GET["TELR"];
$ENDERECO =$_GET["ENDERECO"];

//if ($a >0 ) || ($b <3) { //or
if($user != null || $senha != null || $email =! null && $email === $CEmail || $senha === $CSenha){
    echo "O usuario foi criado com sucesso...";
    echo "Va para a proxima pagina ";
    echo "<a href='indexLogado.html'>Pagina inicial</a>";
    
}
else{
    echo "Você não digitou um dos principais campos que são Email ou Senha Ou login";
}




?>

</body>
</html>