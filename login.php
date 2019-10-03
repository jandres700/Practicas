<?php
    include('datebase.php');
    session_start();

    $message = '' ;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($_POST['email'] && $_POST['password']){
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($conn, $email);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'" ;
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($res);
        if($rows == 1){
          header("location:bienvenido.php");
        }else{
          $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error al acceder</strong> El usuario no existe o la contraseña no es correcta.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      }else{
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Complete los campos</strong> Los campos son inexistentes.
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
   <link rel="stylesheet" href="css/principal2.css">
   <link rel="stylesheet" href="dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="js/jquery.js">
   <link rel="stylesheet" href="dist/js/bootstrap.min.js">
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<?php if(!empty($message)): ?>    
        <p><?= $message ?></p>
    <?php endif; ?>

    <div>
        <img src="img/Logo.png" class="ejemplo"> 
    </div>
        <form method="POST">
  <div class="form-group">
    <label for="email">Correo Electronico</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo Electronico">
        <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
  </div>
  <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
  </div>
        <button type="submit"  class="btn btn-primary">Ingresar</button>            
        <a class="btn btn-success"  href="signup.php" >Registrarse</a>
        </form>    
</body>
</html>  