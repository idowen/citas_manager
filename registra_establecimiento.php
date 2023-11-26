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
    <title>Establecimiento</title>
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
                    <a class="nav-link" href="./index.php">Inicio</a>
                </li>
            </ul>
          </div>
        </div>
</nav>   
<div class="box_registro_establecimiento">
<div class="container">
  <div class="row">

    <div class="col">
        <form >
            <label for="imagen"><h3>Sube la imagen de tu establecimiento.</h3></label>
              <img src="./images/establecimiento.webp" alt="">
                <input type="file" id="imagen" name="imagen">
        </form>
    </div>

    <div class="col">
      <div class="input-field mt-5 mb-5"> <span class="far  p-2"></span> <input name="nombre" type="text"  placeholder="Nombre Del Establecimiento:" > </div>

      <div class="input-field mt-5 mb-5"> <span class="far p-2"></span> <input name="direccion" type="text"  placeholder="Lugar Del Establecimiento:" > </div>

      <div class="input-field mt-5 mb-5"> <span class="far my-4 mb-4 p-2"></span> <input name="descripcion" type="text"  placeholder="Descripcion Del Establecimiento:"> </div>

      <div class="input-field mt-5 mb-5"> <span class="far p-2"></span> <input name="tipo cita" type="text"  placeholder="Tipo  De Cita:" > </div>
    </div>
    
    <div class="col">

      <div class="input-field mt-5 mb-5"> <span class="far p-2"></span> <input name="horarios" type="text"  placeholder="Horarios:" > </div>

      <div class="input-field mt-5 mb-5"> <span class="far p-2"></span> <input name="correo" type="text"  placeholder="Correo:" > </div>

      <div class="input-field mt-5 mb-2"> <span class="far p-2"></span> <input name="Telefono" type="text"  placeholder="Telefono:" > </div>
    </div>

    <div class="d-flex align-items-start">
        </div> <button class="btn btn-block text-center my-1" name="registrar" type="submit">Guardar</button>
  </div>
</div>
</div>
</body>
</html>