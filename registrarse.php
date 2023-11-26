<?php 
  require_once './dbconexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Raleway:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./style.css">
       
    <title>Registrarse</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img class="icon_logo" width="32" height="32" src="https://img.icons8.com/windows/32/000000/baby-calendar.png" alt="baby-calendar"/>
                    CitaManager
            </a>
              
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                              <a class="nav-link" href="#">Inicia Sesión</a>
                        </li>
                  </ul>
              </div>
        </div>
</nav>   

<div class="box_registro">
      <div class="login form">
            <div class="wrapper bg-white">
                  <div class="h4 text-muted text-center pt-2">Ingresa Tus Datos</div>
                        <form class="pt-2" method="POST">
                              <div class="form-group py-2" form method="POST">
                                    <div class="input-field"> <span class="far p-2"></span> <input type="text" placeholder="Nombre:" required class="input" name="nombre">
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span> <input type="text"  placeholder="Apellido:" required class="input" name="apellido"> 
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="email"  placeholder="Correo:" required class="input" name="correo"> 
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="tel"  placeholder="Telefono:" required class="input" name="telefono"> 
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span> <input type="text"  placeholder="Usuario:" required class="input" name="usuario"> 
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password"  placeholder="Contraseña:" required class="input" name="contrasena"> 
                                    </div>
                              </div>
                              
                              <div class="d-flex align-items-start">
                                     </div> <button class="btn btn-block text-center my-3" name="registrar" type="submit">Registrarme</button>
                                    
                                    <div class="text-center pt-1 text-muted">¿Ya tienes cuenta?<a href="./index.php">Iniciar Sesion</a></div>

                                   <?php
require_once './dbconexion.php';

# Inicia Código de REGISTRAR
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $activo="si";

    if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($telefono) && !empty($usuario) && !empty($contrasena)) {
        try {
            // Verifica si el correo electrónico ya existe
            $query = "SELECT * FROM usuarios_reg WHERE correo = :correo";
            $statement = $cnnPDO->prepare($query);
            $statement->bindParam(':correo', $correo);
            $statement->execute();
            $resultsCorreo = $statement->fetchAll();

            if ($resultsCorreo) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Ups! El correo electronico ya existe.</strong> Prueba con otro.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } else {
                // Verifica si el nombre de usuario ya existe
                $query = "SELECT * FROM usuarios_reg WHERE usuario = :usuario";
                $statement = $cnnPDO->prepare($query);
                $statement->bindParam(':usuario', $usuario);
                $statement->execute();
                $resultsUsuario = $statement->fetchAll();

                if ($resultsUsuario) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Ups! El usuario ya existe.</strong> Prueba con otro.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                } else {
                    // Inserta el nuevo usuario
                    $sql = $cnnPDO->prepare("INSERT INTO usuarios_reg (nombre, apellido, correo, telefono, usuario, contrasena, activo) VALUES (:nombre, :apellido, :correo, :telefono, :usuario, :contrasena, :activo)");

                    $sql->bindParam(':nombre', $nombre);
                    $sql->bindParam(':apellido', $apellido);
                    $sql->bindParam(':correo', $correo);
                    $sql->bindParam(':telefono', $telefono);
                    $sql->bindParam(':usuario', $usuario);
                    $sql->bindParam(':contrasena', $contrasena);
                    $sql->bindParam(':activo',$activo);

                    if ($sql->execute()) {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Usuario Registrado.</strong> Te has registrado.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';

                    }
                }
            }
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    }
}

unset($cnnPDO);
?>

                                    </form> 
                                </div>

                            </div>
                                <div class="">
                            </div>
</div>




<?php
    include('./footer.php');
?>

</body>
</html>