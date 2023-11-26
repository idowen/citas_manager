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
        <title>Document</title>
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
                    <a class="nav-link" href="">Bienvenido</a>
                </li>
                
            </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ver perfil
                </button>
        </div>
    </div>
</nav> 

<div style="align-items: center;" class="container mt-5 mt-5 d-flex flex-column justify-content-center align-items-center">
  <div style="text-align: center;" class="row">
    <div class="col-md-4">
      <img src="./images/todos_los_usuarios.jfif" alt="sector salud" class="img-top circular-image">
      <h5>Todos los usuarios</h5>
      <button class="btn btn-dark">Agendar cita</button>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-4">
      <img src="./images/usuarios_que_agendaron.jfif" alt="restaurantes" class="img-top circular-image">
      <h5>Usuarios que agendaron cita</h5>
      <button  class="btn btn-dark">Agendar citas</button>
    </div>
  </div>
</div>

</body>
</html>
