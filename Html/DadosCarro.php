<?php


$carro = $_POST['Carro'];
$descricao = $_POST['Descricao'];
$valor = $_POST['Valor'];
$imagem = $_POST['imagem'];


//echo "carro: $carro <br>"

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
$sql = "INSERT INTO veiculo(nome, descricao, valor, imagem) VALUES ('$carro','$descricao','$valor', '$imagem')";
if ($conn->query($sql) === TRUE) {
  include_once('catalogo.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>