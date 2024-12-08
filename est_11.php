<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    

</head>

<body>
    <nav class="navbar m-1 p-1" style="background-color: rgba(64, 142, 165, 0.5);">
        <!-- Navbar content -->
        <img
            src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg"
            alt="logo"
            class="logoCera ms-2 " />
        <h1 class=" font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27); ">Esea en Cerámica Nº1</h1>

        <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera me-2 " />
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <h3 class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Bienvenid@, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            </div>

            <div class="col-2"><a href="logout.php" class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Cerrar sesión</a>
            </div>
        </div>
    </div>

    <body>

        <?php
        include("coneccion.php");
        $sql = "SELECT 
                    inscripciones.id_inscripcion,
                    estudiantes.apellidoNombre AS estudiante,
                    estudiantes.dni,
                    inscripciones.curso,
                    inscripciones.cicloLectivo
                FROM 
                    inscripciones
                JOIN 
                    estudiantes ON inscripciones.estudiante = estudiantes.id_estudiante
                WHERE 
                    inscripciones.curso = 1 AND inscripciones.cicloLectivo = 1
                ORDER BY 
                    estudiante ASC;";
        $result = mysqli_query($conn, $sql);
        $orden = 1; // Número de orden inicial



        ?>

        <div class="container">

            <a href="inicio.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg> Inicio
            </a>
            <button class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;" onclick="window.print()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1" />
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                </svg> Imprimir</button>
            <!-- Formulario de contacto -->
            <div class="container p-2">
                <div class="row m-2">
                    <div class="col-12  mt-5)">
                        <h3 class="bg-primary p-2"
                            style="font-family: 'Courier New', Courier, monospace; color: white; border-radius: 10px;">
                            1º 1ª B.E.C Turno Mañana
                        </h3>


                        <div class="mb-3">
                            <input type="text" class="form-control" id="searchInput" placeholder="Buscar Estudiante...">
                        </div>
                        <table class="table table-striped table-bordered table-hover table-responsive" style="max-height: 300px; overflow-y: auto;">
                            <thead class="thead-dark text-center bg-info" style="font-family: 'Courier New', Courier, monospace; color: white;">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Apellido/s y Nombre/s</th>
                                    <th scope="col">DNI</th>


                                </tr>
                            </thead>
                            <tbody class="text-center" style="font-family:'Courier New',Courier, monospace">
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $orden++ . "</td>"; // Mostrar el número de orden
                                        echo "<td class='text-start'>" . htmlspecialchars($row['estudiante']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['dni']) . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>



                <?php
                // Cerrar la conexión a la base de datos
                $conn->close();
                ?>
            </div>
    </body>

    <footer>
        <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
    </footer>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var input = document.getElementById('searchInput');
            var filter = input.value.toLowerCase();
            var tableBody = document.getElementsByTagName('tbody')[0];
            var rows = tableBody.getElementsByTagName('tr');

            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName('td');
                var match = false;
                for (var j = 0; j < cells.length; j++) {
                    if (cells[j].innerText.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }
                rows[i].style.display = match ? '' : 'none';
            }
        });
    </script>