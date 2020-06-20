<?php

$servername = "db4free.net";
$username = "carwaydb";
$password = "userbancon2";
$dbname = "EntregaN2.sexta";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT id, nome, sobrenome FROM pessoas ";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]." - sobrenome: ".$row["sobrenome"]. "<br>";
  }
} 
else {
    echo "0 results";
}

mysqli_close($conn);

echo "<a href='indexLogado.html'> Pagina inicial </a>";

?>
