<?php
    include('datebase.php');
    session_start();

    $message = '' ;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['email'] && $_POST['password'] && $_POST['rpassword']){
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($conn, $email);
    
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if($res){
                header("location: login.php");
            }
        }else{
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error al registrar</strong>Debe llenar todos los campos.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }

    }else{
        $message = mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/registrarse.css">
   <link rel="stylesheet" href="dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="js/jquery.js">
   <link rel="stylesheet" href="dist/js/bootstrap.min.js">
    <meta charset="UTF-8">
    <title>Crear una Nueva Cuenta</title>
</head>
<body>

    <?php if(!empty($message)): ?>    
        <p><?= $message ?></p>
    <?php endif; ?>



<div href="imagen">
        <img src="img/Logo.png" class="ejemplo">
        <br /> 
   </div>   
            <form id="create_account" method="POST">
                <fieldset id="signup">
                            <div class="form-group">
                                    <label for="email">Correo Electronico</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese Correo">
                                  </div>
                            <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                  </div> 
                            <div class="form-group">
                                        <label for="password">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Contraseña">
                                      </div>
                            <div class="registrarse">
                                    <button class="btn btn-primary" type="submit">Registrarse</button>
                                
                            </div>
                                </fieldset>
            </form> <br />    
</body>
</html>