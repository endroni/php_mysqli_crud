<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cinemas";

$nome_filme = $_POST['txt_nome'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";

/* Insere dados */
$sql_insere = "INSERT INTO tbl_filmes (nome_filme)
VALUES ('$nome_filme')";

if ($conn->query($sql_insere) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql_insere . "<br>" . $conn->error;
}

/* Busca dados */
$sql_insere = "SELECT id_filme, nome_filme FROM tbl_filmes";
$result = $conn->query($sql_insere);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id_filme"]. " - Nome do filme: " . $row["nome_filme"]. " " . "<br>";
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
?>