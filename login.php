<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'coneccion.php'; // Asegúrate de que este archivo exista y tenga la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                header("Location: inicio.php");
                exit();
            } else {
                echo "<script>alert('Contraseña incorrecta'); location.assign('index.php');</script>";
            }
        } else {
            echo "<script>alert('Usuario no encontrado'); location.assign('index.php');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Por favor complete todos los campos'); location.assign('index.php');</script>";
    }
}

$conn->close();
?>
<footer>
        <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
    </footer>