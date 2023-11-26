<?php 
  require_once './dbconexion.php';
?>

<?php 
  # Inicia Código de REGISTRAR

  if (isset($_POST['registrar'])) 
  {  
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $correo=$_POST['correo'];
      $telefono=$_POST['telefono'];
      $usuario=$_POST['usuario'];
      $contraseña=$_POST['contraseña'];
    
    if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($telefono) && !empty($usuario) && !empty($contraseña))
    {  
      $sql=$cnnPDO->prepare("INSERT INTO usuarios_reg ( nombre, apellido, correo, telefono, usuario, contraseña) VALUES ( :nombre, :apellido, :correo, :telefono, :usuario, :contraseña)");
      
                  $sql->bindParam(':nombre',$nombre);
                  $sql->bindParam(':apellido',$apellido);
                  $sql->bindParam(':correo',$correo);
                  $sql->bindParam(':telefono',$telefono);
                  $sql->bindParam(':usuario',$usuario);
                  $sql->bindParam(':contraseña',$contraseña);
                  
                  if($sql->execute()){
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Usuario Registrado.</strong> Te has registrado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                  } else {
                    echo "Error: " . $sql->errorInfo()[2];
                  }
      
    }
  }
  unset($cnnPDO);
  # Termina Código de REGISTRAR
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
                        <form class="pt-2" >
                              <div class="form-group py-2" form method="POST">
                                    <div class="input-field"> <span class="far p-2"></span>
                                          <input name="nombre" type="text" placeholder="Nombre:" >
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span>
                                          <label for="">
                                                <input name="apellido" type="text" placeholder="Apellido:" > 
                                          </label>
                                          
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span>
                                          <label for="">
                                                <input name="correo" type="email"  placeholder="Correo:" >
                                          </label>
                                           
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span>
                                          <label for="">
                                                <input name="telefono" type="tel"  placeholder="Telefono:"> 
                                          </label>
                   
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span>
                                          <label for="">
                                                <input name="usuario" type="text" placeholder="Usuario:"> 
                                          </label>
                                          
                                    </div>
                              </div>
                              <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas p-2"></span>
                                          <label for="">
                                                <input name="contraseña" type="password"  placeholder="Contraseña:"> 
                                          </label>
                                          
                                    </div>
                              </div>
                              
                              <div class="d-flex align-items-start">
                                    </div> <button name="registrar" class="btn btn-block text-center my-3" type="submit">Registrarme</button>
                                    
                                    <div class="text-center pt-1 text-muted">¿Ya tienes cuenta?<a href="./index.php">Iniciar Sesion</a></div>
                                    </form> 
                                </div>

                            </div>
                                <div class="">
                            </div>
</div>



<footer class="d-flex flex-wrap justify-content-between align-items-center border-bottom">
      <a class="navbar-brand" href="#">
          <img class="icon_logo" width="32" height="32" src="https://img.icons8.com/windows/32/000000/baby-calendar.png" alt="baby-calendar"/>
          CitaManager
      </a>
    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-muted">Inicio</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Características</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Acerca</a></li>
    </ul>
</footer>

</body>
</html>