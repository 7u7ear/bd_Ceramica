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
      <h2>Bienvenid@, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    </div>

    <div class="col-2"><a href="logout.php" class="btn btn-primary">Cerrar sesión</a>
    </div>
  </div>
</div>

<body>

  <div class="container">
    <div class="row mt-2"></div>

    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Estudiantes</h5>
            <p class="card-text">texto</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Docentes</h5>
            <p class="card-text">Pof</p>
            <a href="agentes.php" class="btn btn-primary ms-3 mb-3 " style="font-family: 'Courier New', Courier, monospace; font-weight: normal;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
              </svg> Listado de Agentes </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2"></div>
  </div>

</body>
<footer>
  <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
</footer>

</html>