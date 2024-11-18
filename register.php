<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecn1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar m-1 p-1" style="background-color: rgba(64, 142, 165, 0.5);">
        <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera ms-2 " />
        <h1 class=" font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27); ">Esea en Cerámica Nº1</h1>
        <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera me-2 " />
    </nav>

    <div class="container">
        <div class="row mt-2">
            <div class="col "></div>
            <h2 style="font-family: 'Courier New', Courier, monospace; color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                </svg> Registro de Usuario:
            </h2>
        </div>

        <div class="row">
            <div class="col-sm-0 col-md-1 col-lg-1 col-xl-1 "></div>

            <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 mt-1 ">

                <div>
                    <section class="contact-form bg-primary  p-4 rounded-3">

                        <form action="register.php" method="post">
                            <label for="username">Nombre de Usuario:</label>
                            <input type="text" id="username" name="username" required><br><br>

                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" required><br><br>

                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required><br><br>

                            <label for="confirm_password">Confirmar Contraseña:</label>
                            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

                            <input type="submit" value="Registrar">
                        </form>
                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "ecn1_de2";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $user = isset($_POST['username']) ? $conn->real_escape_string($_POST['username']) : '';
                            $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
                            $pass = isset($_POST['password']) ? $_POST['password'] : '';
                            $confirm_pass = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

                            if (!empty($user) && !empty($email) && !empty($pass) && !empty($confirm_pass)) {
                                if ($pass === $confirm_pass) {
                                    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

                                    $stmt = $conn->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
                                    $stmt->bind_param("sss", $user, $email, $hashed_password);

                                    if ($stmt->execute()) {
                                        echo "<script>alert('El usuario se creo Correctamente'); location.assign('index.php');</script>";
                                    } else {
                                        echo "Error: " . $stmt->error;
                                    }

                                    $stmt->close();
                                } else {
                                    echo "<script>alert('No coincide Contraseña intentelo nuevamente'); location.assign('register.php');</script>";
                                }
                            } else {
                                echo "<script>alert('Por favor complete todos los campos'); location.assign('register.php');</script>";
                            }

                            $conn->close();
                        }
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
</body>

</html>