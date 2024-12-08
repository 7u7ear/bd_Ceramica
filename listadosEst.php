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
    <title>Listados de Estudiantes</title>
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
<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <h3 class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Bienvenid@, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
        </div>

        <div class="col-2"><a href="logout.php" class="btn btn-primary" style="font-family: 'Courier New', Courier, monospace; color: white;">Cerrar sesión</a>
        </div>
    </div>
</div>

<body>

    <div class="container">
        <div class="row mt-2"></div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Listados de Estudiantes</h5><br><br>

                        <!-- ACORDION TURNOS  -->
                        <div class="accordion" id="accordionExample">
                            <!-- Turno Mañana -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMorning" aria-expanded="true" aria-controls="collapseMorning">
                                        Turno Mañana
                                    </button>
                                </h2>
                                <div id="collapseMorning" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionMorning">
                                            <!-- B.E.C -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBECMorning" aria-expanded="true" aria-controls="collapseBECMorning">
                                                        B.E.C
                                                    </button>
                                                </h2>
                                                <div id="collapseBECMorning" class="accordion-collapse collapse show" data-bs-parent="#accordionMorning">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de B.E.C - Turno Mañana.-->

                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             4º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             4º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             5º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             5º 2ª 
                                                        </a>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TCA -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTCAMorning" aria-expanded="false" aria-controls="collapseTCAMorning">
                                                        TCA
                                                    </button>
                                                </h2>
                                                <div id="collapseTCAMorning" class="accordion-collapse collapse" data-bs-parent="#accordionMorning">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de TCA - Turno Mañana.-->
                                                       <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º  
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AUX -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAUXMorning" aria-expanded="false" aria-controls="collapseAUXMorning">
                                                        AUX
                                                    </button>
                                                </h2>
                                                <div id="collapseAUXMorning" class="accordion-collapse collapse" data-bs-parent="#accordionMorning">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de AUX - Turno Mañana.-->
                                                       <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º Vitral 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º Vitral 
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Turno Tarde -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAfternoon" aria-expanded="false" aria-controls="collapseAfternoon">
                                        Turno Tarde
                                    </button>
                                </h2>
                                <div id="collapseAfternoon" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionAfternoon">
                                            <!-- B.E.C -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBECAfternoon" aria-expanded="true" aria-controls="collapseBECAfternoon">
                                                        B.E.C
                                                    </button>
                                                </h2>
                                                <div id="collapseBECAfternoon" class="accordion-collapse collapse show" data-bs-parent="#accordionAfternoon">
                                                    <div class="accordion-body">
                                                      <!--  Contenido de B.E.C - Turno Tarde.-->
                                                      <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 3ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 4ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 3ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 4ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º 3ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             4º 3ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             5º 3ª 
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TCA -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTCAAfternoon" aria-expanded="false" aria-controls="collapseTCAAfternoon">
                                                        TCA
                                                    </button>
                                                </h2>
                                                <div id="collapseTCAAfternoon" class="accordion-collapse collapse" data-bs-parent="#accordionAfternoon">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de TCA - Turno Tarde.-->
                                                       <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º  
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º  
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AUX -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAUXAfternoon" aria-expanded="false" aria-controls="collapseAUXAfternoon">
                                                        AUX
                                                    </button>
                                                </h2>
                                                <div id="collapseAUXAfternoon" class="accordion-collapse collapse" data-bs-parent="#accordionAfternoon">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de AUX - Turno Tarde.-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Turno Noche -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNight" aria-expanded="false" aria-controls="collapseNight">
                                        Turno Noche
                                    </button>
                                </h2>
                                <div id="collapseNight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion" id="accordionNight">
                                            <!-- TCA -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTCANight" aria-expanded="true" aria-controls="collapseTCANight">
                                                        TCA
                                                    </button>
                                                </h2>
                                                <div id="collapseTCANight" class="accordion-collapse collapse show" data-bs-parent="#accordionNight">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de TCA - Turno Noche.-->
                                                       <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 1ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             1º 2ª 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             2º 
                                                        </a>
                                                        <a href="est_11.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                                                             3º  
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AUX -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAUXNight" aria-expanded="false" aria-controls="collapseAUXNight">
                                                        AUX
                                                    </button>
                                                </h2>
                                                <div id="collapseAUXNight" class="accordion-collapse collapse" data-bs-parent="#accordionNight">
                                                    <div class="accordion-body">
                                                       <!-- Contenido de AUX - Turno Noche.-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>



                        <!-- hsata aca ACORDION TURNOS  -->

                        <a href="inicio.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                            </svg> Inicio
                        </a>&nbsp;&nbsp;


                    </div>
                </div>
            </div>
        </div>



    </div>

</body>

</html>
<footer>
    <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
</footer>