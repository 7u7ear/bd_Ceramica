<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>BD_Cera</title>
</head>

<body>
    <nav class="navbar m-1 p-1" style="background-color: rgba(64, 142, 165, 0.5);">
        <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera ms-2" />
        <h1 class="font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27);">Esea en Cerámica Nº1</h1>
        <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera me-2" />
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Ingresar</button>
                                    </div>
                                    <div class="col-6">
                                        <a  href="register.php" class="btn btn-primary me">Registrarse</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<footer>
        <footer>© 2024 Escuela Superior de Enseñanza Artística de Cerámica Nº1. Bulnes 45, CABA.</footer>
    </footer>