<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecn1</title>
    <link rel="stylesheet" href="style/style.css">
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


    <a href="agregar.php" class="btn btn-primary ms-6 " >Nuevo Agente</a>

    <?php
    include("coneccion.php");
    $sql = "SELECT * FROM agentes";
    $result = mysqli_query($conn, $sql);

    ?>
    <div id="fondo" class="flex-center">
        <div class="container">

            <!-- Formulario de contacto -->
            <div class="container p-2">
                <div class="row m-2">

                    <div class="col-12 bg-info mt-5)">
                        <h1> Listado Agentes </h1>
                        <table>
                            <thead>
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
                                            <?php echo "<a href=''>Editar</a>"; ?>
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

            <footer class="footer">
                <p>Footer</p>
                <?php
                // Cerrar la conexión a la base de datos
                $conn->close();
                ?>

</html>