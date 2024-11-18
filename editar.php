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

    <div class="col-2"><a href="logout.php" class="btn btn-primary">Cerrar sesión</a>
    </div>
  </div>
</div>

<body>
    <?php
    include("coneccion.php");

    if (isset($_POST['enviar'])) {

        $id_rh = $_POST['id_rh'];
        $apellido_nombre = $_POST['apellido_Nombre'];
        $cuil = $_POST['cuil'];
        $dni = $_POST['dni'];
        $ficha = $_POST['ficha'];
        $en_actividad = isset($_POST['en_actividad']) ? 1 : 0;
        $IngresoEst = $_POST['IngresoEst'];
        $ultima_DJ = $_POST['ultima_DJ'];

        $sql_update = "UPDATE agentes SET 
                        apellido_Nombre='$apellido_nombre', 
                        cuil='$cuil', 
                        dni='$dni', 
                        ficha='$ficha', 
                        en_actividad='$en_actividad', 
                        IngresoEst='$IngresoEst', 
                        ultima_DJ='$ultima_DJ' 
                    WHERE id_rh='$id_rh'";

        if (mysqli_query($conn, $sql_update)) {
            echo "<script languaje='javascript'>alert('Datos Actualizados correctamente');
            location.assign('agentes.php');
            </script>";
        } else {
            echo "<script languaje='javascript'>alert('Los datos NO se han Actualizado correctamente');
            location.assign('agentes.php');
            </script>";
        }

        mysqli_close($conn);
    } else {
        $id_rh = $_GET['id_rh'];
        $sql = "SELECT * FROM agentes WHERE id_rh = '$id_rh'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $apellido_nombre = $row['apellido_Nombre'];
        $cuil = $row['cuil'];
        $dni = $row['dni'];
        $ficha = $row['ficha'];
        $IngresoEst = $row['IngresoEst'];
        $ultima_DJ = $row['ultima_DJ'];
        $en_actividad = $row['en_actividad'];
        mysqli_close($conn);
    ?>

    <div class="container">
            <div class="row ">
                <div class="col "></div>
                <h2 style="font-family: 'Courier New', Courier, monospace; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Actualizar Agente: </h2>
            </div>

            <div class="row">
                <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1 "></div>

                <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 ">
                    <div>
                        <section class="contact-form bg-primary  p-4 rounded-3">
                            <form id="miFormulario2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                <label for="apellido_Nombre">Apellido/s y Nombre/s:</label>
                                <input type="text" id="apellido_Nombre" name="apellido_Nombre" value="<?php echo $apellido_nombre; ?>" required /><br><br>

                                <label for="cuil">CUIL:</label>
                                <input type="text" id="cuil" name="cuil" value="<?php echo $cuil; ?>" required />&nbsp;&nbsp;

                                <label for="dni">DNI:</label>
                                <input type="number" id="dni" name="dni" value="<?php echo $dni; ?>" required /><br><br>

                                <label for="ficha">FICHA:</label>
                                <input type="number" id="ficha" name="ficha" value="<?php echo $ficha; ?>" required />&nbsp;&nbsp;&nbsp;&nbsp;

                                <label for="en_actividad">En Actividad:</label>
                                <input type="checkbox" id="en_actividad" name="en_actividad" value="1" <?php if ($en_actividad == 1) echo 'checked'; ?> /><br><br>

                                <label for="IngresoEst">Fecha de Ingreso:</label>
                                <input type="date" id="IngresoEst" name="IngresoEst" value="<?php echo $IngresoEst; ?>" required />&nbsp;&nbsp;

                                <label for="ultima_DJ">Última DJ:</label>
                                <input type="date" id="ultima_DJ" name="ultima_DJ" value="<?php echo $ultima_DJ; ?>" />

                                <input type="hidden" id="id_rh" name="id_rh" value="<?php echo $id_rh; ?>" readonly />

                            </form>
                        </section>
                        <div class="mt-4 d-flex justify-content-end">

                           <button type="submit" form="miFormulario2" class="btn btn-primary ms-6 mb-3 me-3" name="enviar" value="ACTUALIZAR" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Actualizar
                            </button>

                            <a href="agentes.php" class="btn btn-primary ms-6 mb-3" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM4.646 4.646a.5.5 0 0 0-.708.708L7.293 8 3.938 11.354a.5.5 0 1 0 .708.708L8 8.707l3.354 3.355a.5.5 0 0 0 .708-.708L8.707 8l3.355-3.354a.5.5 0 0 0-.708-.708L8 7.293 4.646 4.646z" />
                                </svg> Cancelar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1"></div>
            </div>

        <?php } ?>
    </div>
</body>

<footer>
    <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
</footer>

</html>