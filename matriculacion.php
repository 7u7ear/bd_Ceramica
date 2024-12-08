<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
include("coneccion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<nav class="navbar p-1" style="background-color: rgba(64, 142, 165, 0.5);">
    <!-- Navbar content -->
    <img
        src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg"
        alt="logo"
        class="logoCera ms-2 " />
    <h1 class=" font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27); ">Esea en Cerámica Nº1</h1>

    <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera me-2 " />
</nav>
<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <h3 class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Bienvenid@, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
        </div>

        <div class="col-2"><a href="logout.php" class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Cerrar sesión</a>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="container">
        <div class="row ">
            <div class="col "></div>
            <h3 style="font-family: 'Courier New', Courier, monospace; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                </svg> Matriculacion </h3>
        </div><br>
        <form id="inscripciones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-light p-4 rounded">

            <!-- Estudiantes -->
            <div class="mb-3">
                <label for="estudiante" class="form-label">Estudiante:</label>
                <select name="estudiante" id="estudiante" class="form-select" required>
                    <option value="">Seleccione un estudiante</option>
                    <?php
                    $query = "SELECT id_estudiante, apellidoNombre FROM estudiantes  ORDER BY apellidoNombre ASC";
                    $result = $conn->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_estudiante'] . "'>" . $row['apellidoNombre'] . "</option>";
                    }
                    ?>
                </select>
                            </div>

            <!-- Cursos -->
            <div class="mb-3">
                <label for="curso" class="form-label">Curso:</label>
                <select name="curso" id="curso" class="form-select" required>
                    <option value="">Seleccione un curso</option>
                    <?php
                    $query = "SELECT id_curso_division, curso FROM curso_division";
                    $result = $conn->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_curso_division'] . "'>" . $row['curso'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Ciclo Lectivo -->
            <div class="mb-3">
                <label for="cicloLectivo" class="form-label">Ciclo Lectivo:</label>
                <select name="cicloLectivo" id="cicloLectivo" class="form-select" required>
                    <option value="">Seleccione un ciclo lectivo</option>
                    <?php
                    $query = "SELECT id_cl, año FROM ciclo_lectivo";
                    $result = $conn->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id_cl'] . "'>" . $row['año'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Botón -->
            
            <button type="submit" form="inscripciones" class="btn btn-primary  ms-3 mb-3" name="enviar" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg> Matricular
                        </button>&nbsp;&nbsp;

            <a href="inicio.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg> Inicio
            </a>&nbsp;&nbsp;


            <a href="estudiantes.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg> Listado de Estudiantes
            </a>
            <a href="listadosEst.php" class="btn btn-primary ms-3 mb-3  " style="font-family: 'Courier New', Courier, monospace; color: white;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5m-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
              </svg>&nbsp;Cursos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estudiante = $_POST['estudiante'];
        $curso = $_POST['curso'];
        $cicloLectivo = $_POST['cicloLectivo'];

        if (!empty($estudiante) && !empty($curso) && !empty($cicloLectivo)) {
            $sql = "INSERT INTO inscripciones (estudiante, curso, cicloLectivo) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iii", $estudiante, $curso, $cicloLectivo);

            if ($stmt->execute()) {
                echo "<script>alert('Estudiante matriculado correctamente'); location.assign('matriculacion.php');</script>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Error al realizar la inscripción: " . $stmt->error . "</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-warning mt-3'>Todos los campos son obligatorios.</div>";
        }
    }
    $conn->close();
    ?>
</div>
</body>

</html>

<footer>
    <h6>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</h6>
</footer>