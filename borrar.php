<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Registro</title>
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

    if (isset($_POST['confirmar'])) {
        $id_rh = $_POST['id_rh'];

        $sql_delete = "DELETE FROM agentes WHERE id_rh='$id_rh'";

        if (mysqli_query($conn, $sql_delete)) {
            echo "<script languaje='javascript'>alert ('Los datos se han Borrado correctamente');
            location.assign('index.php');
            </script>";
        } else {
            "<script languaje='javascript'>alert ('Los datos NO han Borrado correctamente');
            location.assign('index.php');
            </script>";
        }

        mysqli_close($conn);
    } else {
        if (isset($_GET['id_rh'])) {
            $id_rh = $_GET['id_rh'];
            $sql = "SELECT apellido_Nombre FROM agentes WHERE id_rh = '$id_rh'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $apellido_nombre = $row['apellido_Nombre'];
            mysqli_close($conn);
        } else {
            echo "<div class='alert alert-danger text-center'>ID no proporcionado</div>";
            exit;
        }
    ?>

        <div class="container p-2 mt-5">
            <div class="row "></div>
            <div class="col-2 p-3 "></div>
            <div class="row m-2">
                <div class="col-3 p-3"></div>
                <div class="col bg-danger p-3">
                    <h2 style="font-family: 'Courier New', Courier, monospace; color: white;"> Borrar Registro:</h2>

                    <section class="contact-form mt-3">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                            <input type="hidden" name="id_rh" value="<?php echo $id_rh; ?>" />

                            <p>¿Estás seguro de que deseas eliminar el registro de <strong><?php echo $apellido_nombre; ?></strong>?</p>

                            <button type="submit" class="btn btn-danger ms-6 mb-3 me-3" name="confirmar" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708" />
                                </svg> Borrar
                            </button>

                            <a href="index.php" class="btn btn-primary ms-6 mb-3" style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                            </svg> Regresar
                            </a>
                        </form>
                    </section>
                </div>
                <div class="col-3 p-3"></div>
            </div>
        </div>

    <?php } ?>

</body>

</html>