<?php
session_start();
if (isset($_POST['login'])) {
    require_once 'dbconexion.php';
    $username = $_POST['username'];
    $contra = $_POST['contrasena'];
    $query = $cnnPDO->prepare('SELECT * from usuarios_reg WHERE usuarios=:usuarios and password=:contrasena');
    $query->bindParam(':usuario', $usuario);
    $query->bindParam(':contrasena', $contrasena);
    $query->execute();
    $count = $query->rowCount();
    $campo = $query->fetch();
    if ($count) {
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['apellido'] = $campo['apellido'];
        $_SESSION['correo'] = $campo['correo'];
        $_SESSION['telefono'] = $campo['telefono'];
        $_SESSION['contrasena'] = $campo['contrasena']; 
        if ($username == 'admin') {
            header("location: ./vista_admin.php");
            exit();
        } else {
            header("location: ./vista_cliente.php");
            exit();
        }
    } else {
        echo "
        <div class='alert alert-danger' role='alert'>
          <b>El Usuario o el Password Son Incorrectos</b>
        </div>";
    }
}
?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 style="text-align: center;" class="subtitle" id="exampleModalLabel">Inicia sesión para poder agendar tu cita y disfrutar de todos los beneficios que ofrecemos.</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="wrapper bg-white">
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