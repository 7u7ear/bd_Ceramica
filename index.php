 

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
                        <thead class="thead-dark text-center">
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
                        <tbody class="text-center">
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
                                    <td><?php echo $row['en_actividad'] ? 'Sí' : 'No'; ?></td>
                                    <td><?php echo '<a href="Editar.php?id_rh=' . $row['id_rh'] . '" class="btn btn-primary ms-8" title="Editar">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                              </svg>
                                              </a>';?>

                                        <?php echo '<a href="borrar.php?id_rh=' . $row['id_rh'] . '" class="btn btn-danger ms-8" title="Borrar">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
                                              </svg> </a>'; ?>
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