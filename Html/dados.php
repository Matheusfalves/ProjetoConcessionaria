<?php
$user=$_POST["user"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$dataN=$_POST["dataN"];
$sexo=$_POST["UIUISEXO"];
$civil=$_POST["eCivil"];
$celular=$_POST["cel"];
$telefone=$_POST["tel"];
$endereco =$_POST["endereco"];

$servername = "db4free.net";
$database = "carwaydb";
$username = "userbancon2";
$password = "EntregaN2.sexta";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO usuarios(usuario, email, senha, data_nascimento, sexo, estado_civil, tel_res, tel_cel, endereco) VALUES ('$user', '$email', '$senha', '$dataN', '$sexo', '$civil',
'$telefone', '$celular', '$endereco')";
if ($conn->query($sql) === TRUE) {
  include_once('indexLogado.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>