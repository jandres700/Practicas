<?php
    $server = 'localhost:3306';
    $username = 'root';
    $password = '';
    $database = 'php_login_database';

    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
      echo "Error al conectar a MySQL";
    } 
?>