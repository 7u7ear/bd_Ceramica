
<?php
    include("coneccion.php");
    

// Obtener el valor del parámetro query
$search = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

// Consulta a la base de datos
$query = "SELECT id_estudiante, apellidoNombre 
          FROM estudiantes 
          WHERE apellidoNombre LIKE '%$search%'
          ORDER BY apellidoNombre ASC";
$result = $conn->query($query);

// Generar opciones para el select
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['id_estudiante'] . "'>" . $row['apellidoNombre'] . "</option>";
}
$conn->close();
?>
