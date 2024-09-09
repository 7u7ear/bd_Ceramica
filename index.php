<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecn1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar m-1" style="background-color: rgba(64, 142, 165, 0.5);">
        <!-- Navbar content -->
        <img
            src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg"
            alt="logo"
            class="logo1 ms-2" />
        <h1 style="font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27)">Esea en Cerámica Nº1</h1>

        <img
            src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg"
            alt="logo"
            class="logo1 me-2" />

    </nav>



    <?php
    include("coneccion.php");
    $sql = "SELECT * FROM agentes";
    $result = mysqli_query($conn, $sql);

    ?>
    <div class="container">
        <a href="agregar.php" class="btn btn-primary ms-8 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
            </svg>&nbsp;&nbsp;Nuevo Agente
        </a>
        <!-- Formulario de contacto -->
        <div class="container p-2">
            <div class="row m-2">
                <div class="col-12  mt-5)">
                <h2 class="bg-primary p-2" style="font-family: 'Courier New', Courier, monospace; color: white;">Listado Agentes</h2>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id_RH</th>
                                <th scope="col">Apellido y Nombre</th>
                                <th scope="col">Cuil</th>
                                <th scope="col">Dni</th>
                                <th scope="col">Ficha</th>
                                <th scope="col">Fecha de Ingreso</th>
                                <th scope="col">Última DJ</th>
                                <th scope="col">En Actividad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id_rh'] ?></td>
                                    <td><?php echo $row['apellido_Nombre'] ?></td>
                                    <td><?php echo $row['cuil'] ?></td>
                                    <td><?php echo $row['dni'] ?></td>
                                    <td><?php echo $row['ficha'] ?></td>
                                    <td><?php echo $row['IngresoEst'] ?></td>
                                    <td><?php echo $row['ultima_DJ'] ?></td>
                                    <td><?php echo $row['en_actividad'] ?></td>
                                    <td>
                                        <?php echo "<a href =''>Editar</a>"; ?>
                                        <?php echo "<a href=''>Eliminar</a>"; ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>


                </div>

            </div>
        </div>
        <?php
        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </div>
</body>

</html>

<footer class="footer pb-1" style="position: fixed; bottom: 0; width: 100%; font-family: 'Courier New', Courier, monospace; font-size: 20px; background-color: rgba(64, 142, 165, 0.5); text-align: center; padding: 20px; display: flex; align-items: center; justify-content: center; height: 40px;">
    <p> © 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</p>
</footer>

