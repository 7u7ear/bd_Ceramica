<?php
include("coneccion.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Preparar la consulta
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    echo "Invalid username or password.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>