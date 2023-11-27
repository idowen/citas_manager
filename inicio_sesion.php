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
                    <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                
                <li class="nav-item">
                    <a class="nav-link" href="./registrarse.php">Registrarse</a>
                </li>
                
            </ul>
                    </div>
              </div>
        </div>

</nav>   

<div class="box_registro">
      <div class="login form">
            <div class="wrapper bg-white">
            <h5 style="text-align: center;" class="subtitle" id="exampleModalLabel">Inicia sesión para poder agendar tu cita y disfrutar de todos los beneficios que ofrecemos.</h5>
                      
                                    <div class="h4 text-muted text-center pt-2">Ingresa Tus Datos</div>
                                    <form class="pt-3" >
                                        <div class="form-group py-2">
                                            <div class="input-field"> <span class="far fa-user p-2"></span> <input name="usuario" type="text" placeholder="Usuario:" required class=""> </div>
                                        </div>
                                        <div class="form-group py-1 pb-2">

                                            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input name="contrasena" type="password"  placeholder="Contraseña:" required class="input"> 
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                        </div> <button class="btn btn-block text-center my-3" type="submit">Iniciar Sesion</button>
                                        <div class="text-center pt-3 text-muted">¿No tienes una cuenta aún? <a href="/registarse.php">Registrarse</a></div>
                                    </form> 
                                </div>
                            </div>
                                <div class="">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
</div>




<?php
    include('./footer.php');
?>

</body>
</html>