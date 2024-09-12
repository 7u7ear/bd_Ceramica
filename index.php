 <html lang="es">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Ecn1</title>
     <link rel="stylesheet" href="css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </head>

 <nav class="navbar m-1 p-1" style="background-color: rgba(64, 142, 165, 0.5);">
     <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera ms-2 " />
     <h1 class=" font-family: Courier New, Courier, monospace; font-size: 40px; color: rgb(5, 13, 27); ">Esea en Cerámica Nº1</h1>
     <img src="img/LOGO-ESEACERAMICA1-ALTA-40x73.jpg" alt="logo" class="logoCera me-2 " />
</nav>

 <body>

     <?php
        include("coneccion.php");
        $sql = "SELECT * FROM agentes";
        $result = mysqli_query($conn, $sql);
        ?>

     <div class="container">
         <a href="agregar.php" class="btn btn-primary ms-8 ">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                 <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                 <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
             </svg>&nbsp;&nbsp;Nuevo Agente
         </a>
         <!-- Formulario de contacto -->
         <div class="container p-2">
             <div class="row m-2">
                 <div class="col-12  mt-5)">
                     <h2 class="bg-primary p-2" style="font-family: 'Courier New', Courier, monospace; color: white;">Listado Agentes</h2>
                     <div class="mb-3">
                        <input type="text" class="form-control" id="searchInput" placeholder="Buscar en la tabla...">
                    </div>

                     <table class="table table-striped table-bordered table-hover table-responsive"  style="max-height: 300px; overflow-y: auto;" >
                         <thead class="thead-dark text-center">
                             <tr>
                                 <th scope="col">Id_RH</th>
                                 <th scope="col">Apellido/s y Nombre/s</th>
                                 <th scope="col">Cuil</th>
                                 <th scope="col">Dni</th>
                                 <th scope="col">Ficha</th>
                                 <th scope="col">Fecha de Ingreso</th>
                                 <th scope="col">Última DDJJ</th>
                                 <th scope="col">En Actividad</th>
                                 <th scope="col">Acciones</th>
                             </tr>
                         </thead>
                         <tbody class="text-center">
                             <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                 <tr>
                                     <td><?php echo $row['id_rh'] ?></td>
                                     <td><?php echo $row['apellido_Nombre'] ?></td>
                                     <td><?php echo $row['cuil'] ?></td>
                                     <td><?php echo $row['dni'] ?></td>
                                     <td><?php echo $row['ficha'] ?></td>
                                     <td><?php echo date('d-m-Y', strtotime($row['IngresoEst'])); ?></td>
                                     <td><?php if (is_null($row['ultima_DJ']) || $row['ultima_DJ'] == '0000-00-00') {
                                                echo 'No presento';
                                            } else {
                                                echo date('d-m-Y', strtotime($row['ultima_DJ']));
                                            }
                                            ?>
                                     </td>
                                     <td><?php echo $row['en_actividad'] ? 'Si' : 'Baja'; ?></td>
                                     <td><?php echo '<a href="Editar.php?id_rh=' . $row['id_rh'] . '" class="btn btn-primary ms-8" title="Editar">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                              </svg>
                                              </a>'; ?>

                                         <?php echo '<a href="borrar.php?id_rh=' . $row['id_rh'] . '" class="btn btn-danger ms-8" title="Borrar">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                              </svg> </a>'; ?>
                                     </td>
                                 </tr>
                             <?php
                                }
                                ?>
                         </tbody>
                     </table>
                 </div>

             </div>
         </div>
         <?php
            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
     </div>
 </body>

 <footer>
    <footer>© 2024 ESEA en Cerámica N°1. Escuela Superior de Enseñanza Artística de Cerámica. Bulnes 45, CABA.</footer>
</footer>

<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var input = document.getElementById('searchInput');
        var filter = input.value.toLowerCase();
        var tableBody = document.getElementsByTagName('tbody')[0];
        var rows = tableBody.getElementsByTagName('tr');

        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            var match = false;
            for (var j = 0; j < cells.length; j++) {
                if (cells[j].innerText.toLowerCase().indexOf(filter) > -1) {
                    match = true;
                    break;
                }
            }
            rows[i].style.display = match ? '' : 'none';
        }
    });
</script>
