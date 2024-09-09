<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">


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
    <div class="container p-2 mt-5">
    <div class="row"></div>
    <div class="col-2 p-3"></div>    
    <div class="row m-2">            
            <div class="col-3  p-3"></div>
            <div class="col-6 bg-primary p-3">
                <h2 style="font-family: 'Courier New', Courier, monospace; color: white;">Formulario de Agentes:</h2>
                <section class="contact-form">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <label for="id_rh">Id RH:</label>
                        <input type="text" id="id_rh" name="id_rh" required /><br><br>

                        <label for="apellido_Nombre">Apellido/s y Nombre/s:</label> 
                        <input type="text" id="apellido_Nombre" name="apellido_Nombre" required /> <br><br>

                        <label for="cuil">CUIL:</label>
                        <input type="text" id="cuil" name="cuil" required />&nbsp;&nbsp;

                        <label for="dni">DNI:</label>
                        <input type="number" id="dni" name="dni" required /> <br><br>

                        <label for="ficha">FICHA:</label>
                        <input type="number" id="ficha" name="ficha" required /> &nbsp;&nbsp;&nbsp;&nbsp;

                        <label for="en_actividad">En Actividad:</label>
                        <input type="checkbox" id="en_actividad" name="en_actividad" value="1" /> <br><br>

                        <label for="IngresoEst">Fecha de Ingreso:</label>
                        <input type="date" id="IngresoEst" name="IngresoEst" required />&nbsp;&nbsp;

                        <label for="ultima_DJ">Última DJ:</label>
                        <input type="date" id="ultima_DJ" name="ultima_DJ" required /><br><br>                        

                        <button type="submit" class="btn btn-primary ms-6 mb-3 me-3" name="enviar" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg>
                            Agregar
                        </button>

                        <a href="index.php" class="btn btn-primary ms-6 mb-3" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                            </svg>
                            Regresar
                        </a>

                    </form>
                </section>

            </div>
            <div class="col-3  p-3"> </div>
        </div>
</body>

</HTml>

<footer class="footer pb-1" style="position: fixed; bottom: 0; width: 100%; font-family: 'Courier New', Courier, monospace; font-size: 20px; background-color: rgba(64, 142, 165, 0.5); text-align: center; padding: 20px; display: flex; align-items: center; justify-content: center; height: 40px;">
    <p>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</p>
</footer>