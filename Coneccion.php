<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecn1_docente";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Coneccion fallida: " . $conn->connect_error);
}
echo "ok" . "<br>";
?>
