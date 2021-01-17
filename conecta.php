<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cinemas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";


$sql = "SELECT id_filme, nome_filme FROM tbl_filmes";
$result = $conn->query($sql);

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