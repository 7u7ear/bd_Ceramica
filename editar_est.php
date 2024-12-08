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

        $id_estudiante = $_POST['id_estudiante'];
        $apellidoNombre = $_POST['apellidoNombre'];
        $dni = $_POST['dni'];
        

        $sql_update = "UPDATE estudiantes SET 
                        apellidoNombre='$apellidoNombre', 
                        dni='$dni' 
                        WHERE id_estudiante='$id_estudiante'";
                 

        if (mysqli_query($conn, $sql_update)) {
            echo "<script languaje='javascript'>alert('Datos Actualizados correctamente');
            location.assign('estudiantes.php');
            </script>";
        } else {
            echo "<script languaje='javascript'>alert('Los datos NO se han Actualizado correctamente');
            location.assign('estudiantes.php');
            </script>";
        }

        mysqli_close($conn);
    } else {
        $id_estudiante = $_GET['id_estudiante'];
        $sql = "SELECT * FROM estudiantes WHERE id_estudiante = '$id_estudiante'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $apellidoNombre = $row['apellidoNombre'];
        $dni = $row['dni'];
        mysqli_close($conn);
    ?>

        <div class="container">
            <div class="row ">
                <div class="col "></div>
                <h3 style="font-family: 'Courier New', Courier, monospace; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg> Actualizar Estudiante: </h3>
            </div>

            <div class="row">
                <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1 "></div>

                <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 ">
                    <div>
                        <section class="contact-form bg-primary  p-4 rounded-3">
                            <form id="miFormularioEst" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                <label for="apellidoNombre">Apellido/s y Nombre/s:</label>
                                <input type="text" id="apellidoNombre" name="apellidoNombre" value="<?php echo $apellidoNombre; ?>" class="form-control" required /><br><br>
                                
                                <label for="dni">DNI:</label><br>
                                <input type="number" id="dni" name="dni" value="<?php echo $dni; ?>" required /><br><br>

                                <input type="hidden" id="id_estudiante" name="id_estudiante" value="<?php echo $id_estudiante; ?>" readonly />
                                

                            </form>
                        </section>
                        <div class="mt-4 d-flex justify-content-end">

                            <a href="inicio.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                </svg> Inicio
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            
                            <a href="estudiantes.php" class="btn btn-primary ms-6 mb-3" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM4.646 4.646a.5.5 0 0 0-.708.708L7.293 8 3.938 11.354a.5.5 0 1 0 .708.708L8 8.707l3.354 3.355a.5.5 0 0 0 .708-.708L8.707 8l3.355-3.354a.5.5 0 0 0-.708-.708L8 7.293 4.646 4.646z" />
                                </svg> Cancelar
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <button type="submit" form="miFormularioEst" class="btn btn-primary ms-6 mb-3 me-3" name="enviar" value="ACTUALIZAR" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg> Actualizar
                            </button>&nbsp;&nbsp;

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