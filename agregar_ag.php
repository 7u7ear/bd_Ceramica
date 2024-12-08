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

        // Intentar ejecutar la consulta
        try {
            $sql = "INSERT INTO agentes (id_rh, apellido_Nombre, cuil, dni, ficha, IngresoEst, ultima_DJ, en_actividad)
                    VALUES ('$id_rh', '$apellido_Nombre', '$cuil', '$dni', '$ficha', '$IngresoEst', '$ultima_DJ', '$en_actividad')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Datos guardados correctamente'); location.assign('agentes.php');</script>";
            } else {
                throw new Exception(mysqli_error($conn));
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) { // Código de error para entrada duplicada
                echo "<script>alert('Error: ID RH repetido.');</script>";
            } else {
                echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
        }

        // Cerrar la conexión
        mysqli_close($conn);
    }
    ?>

    <div class="container">
        <div class="row mt-2">
            <div class="col "></div>
            <h4 style="font-family: 'Courier New', Courier, monospace; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                </svg> Nuevo Agente:</h4>
        </div>

        <div class="row">
            <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1 "></div>

            <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 mt-1 ">

                <div>
                    <section class="contact-form bg-primary  p-4 rounded-3">
                        <form id="miFormulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


                            <label for="id_rh">Id RH:</label>
                            <input type="text" id="id_rh" name="id_rh" required />&nbsp;&nbsp;&nbsp;&nbsp;
                            <label for="en_actividad">Marcar si el agente está en Actividad:</label>
                            <input type="checkbox" id="en_actividad" name="en_actividad" value="1" /> <br><br>

                            <label for="apellido_Nombre">Apellido/s y Nombre/s:</label>
                            <input type="text" id="apellido_Nombre" name="apellido_Nombre" required />

                            <label for="cuil">Cuil:</label>
                            <input type="text" id="cuil" name="cuil" required /> <br><br>

                            <label for="dni">Dni:</label>
                            <input type="number" id="dni" name="dni" required /> &nbsp;&nbsp;&nbsp;&nbsp;

                            <label for="ficha">Ficha:</label>
                            <input type="number" id="ficha" name="ficha" required /> <br><br>


                            <label for="IngresoEst">Fecha de Ingreso:</label>
                            <input type="date" id="IngresoEst" name="IngresoEst" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <label for="ultima_DJ">Última DDJJ:</label>
                            <input type="date" id="ultima_DJ" name="ultima_DJ" />


                        </form>
                    </section>
                    <div class="mt-4 d-flex justify-content-end">

                    <a href="inicio.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                            </svg> Inicio
                        </a>&nbsp;&nbsp;

                       
                        <a href="agentes.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg> Listado de Agentes
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <button type="submit" form="miFormulario" class="btn btn-primary ms-6 mb-3 me-3" name="enviar" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                            </svg> Agregar
                        </button>&nbsp;&nbsp;

                       
                    </div>
                </div>
            </div>
            <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1"></div>
        </div>
    </div>
</body>

<footer>
    <h6>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</h6>
</footer>

</HTml>