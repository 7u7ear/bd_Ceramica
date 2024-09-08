<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
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
    if (isset($_POST['enviar'])) {
        $id_rh = $_POST['id_rh'];
        $apellido_Nombre = $_POST['apellido_Nombre'];
        $cuil = $_POST['cuil'];
        $dni = $_POST['dni'];
        $ficha =  $_POST['ficha'];
        $IngresoEst = $_POST['IngresoEst'];
        $ultima_DJ = $_POST['ultima_DJ'];
        $en_actividad = isset($_POST['en_actividad']) ? 1 : 0; // Verifica si el checkbox está marcado

        include("coneccion.php");
        $sql = "INSERT INTO agentes (id_rh, apellido_Nombre, cuil, dni, ficha, IngresoEst, ultima_DJ, en_actividad)
        VALUES ('$id_rh', '$apellido_Nombre', '$cuil', '$dni', '$ficha', '$IngresoEst', '$ultima_DJ', '$en_actividad')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script languaje='javascript'>alert('Datos guardados correctamente');
            location.assign('index.php');
            </script>";
        } else {
            echo "<script languaje='javascript'>alert('Los datos NO se han guardado correctamente');
            location.assign('index.php');
            </script>";
        }
        mysqli_close($conn);
    } else {
    }

    ?>
    <div class="container p-2">
        < class="row m-2">
        <div class="col bg-info p-3"></div>
            <div class="col bg-info p-3">
                <section class="contact-form">
                    <h2>Formulario de Agentes</h2>
                    <p>Por favor, complete los campos para agregar un nuevo agente.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <label for="id_rh">Id RH:</label>
                        <input type="text" id="id_rh" name="id_rh" required /><br><br>

                        <label for="apellido_Nombre">Apellido y Nombre:</label>
                        <input type="text" id="apellido_Nombre" name="apellido_Nombre" required /> <br><br>

                        <label for="cuil">CUIL:</label>
                        <input type="text" id="cuil" name="cuil" required /><br><br>

                        <label for="dni">DNI:</label>
                        <input type="number" id="dni" name="dni" required /> <br><br>

                        <label for="ficha">FICHA:</label>
                        <input type="number" id="ficha" name="ficha" required /> <br><br>

                        <label for="IngresoEst">Fecha de Ingreso:</label>
                        <input type="date" id="IngresoEst" name="IngresoEst" required /> <br><br>

                        <label for="ultima_DJ">Última DJ:</label>
                        <input type="date" id="ultima_DJ" name="ultima_DJ" required /><br><br>

                        <label for="en_actividad">En Actividad:</label>
                        <input type="checkbox" id="en_actividad" name="en_actividad" value="1" /> <br><br>

                        <input type="submit" class="btn btn-primary ms-6 mb-3 me-3" name="enviar" value="Agregar" />
                        <a href="index.php" class="btn btn-primary ms-6 mb-3">Regresar</a>

                    </form>
                </section>

            </div>
            <div class="col bg-info p-3">
        
        </div>
    </div>
</body>

</HTml>