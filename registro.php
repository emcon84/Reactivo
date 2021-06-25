<?php

if(isset($_POST)) {
  require_once 'conexion.php';
  
  session_start();
  //recoger los valores del formulario de registro
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
  $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
  $razonSocial = isset($_POST['razonSocial']) ? $_POST['razonSocial'] : false;
  $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
  $email = isset($_POST['email']) ? $_POST['email'] : false;
  $password = isset($_POST['password']) ? $_POST['password'] : false;
  $pais = isset($_POST['pais']) ? $_POST['pais'] : false;
  $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;

  //array de errores
  $errores = array();

  //validar los datos antes de ingresarlos a la base de datos
  if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validado = true;
  }else {
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es válido";  
  }

  if(!empty($apellido) && !is_numeric($apelldo) && !preg_match("/[0-9]/", $apellido)) {
    $apellido_validado = true;
  }else {
    $apellido_validado = false;
    $errores['apellido'] = "El apellido no es válido";  
  }

  if(!empty($razonSocial) && !is_numeric($razonSocial) && !preg_match("/[0-9]/", $razonSocial)) {
    $razonSocial_validado = true;
  }else {
    $razonSocial_validado = false;
    $errores['razonSocial'] = "La Razón Social no es válida";  
  }

  if(!empty($telefono) && is_numeric($telefono)) {
    $telefono_validado = true;
  }else {
    $telefono_validado = false;
    $errores['telefono'] = "El telefono no es válido";  
  }

  if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
  }else {
    $email_validado = false;
    $errores['email'] = "El Email no es válido";  
  }

  if(!empty($password)) {
    $password_validado = true;
  }else {
    $password_validado = false;
    $errores['password'] = "La contraseña no es válida";  
  }

  if(!empty($pais) && !is_numeric($pais) && !preg_match("/[0-9]/", $pais)) {
    $pais_validado = true;
  }else {
    $pais_validado = false;
    $errores['pais'] = "El país no es válido";  
  }

  if(!empty($provincia) && !is_numeric($provincia) && !preg_match("/[0-9]/", $provincia)) {
    $provincia_validado = true;
  }else {
    $provincia_validado = false;
    $errores['provincia'] = "La provincia no es válida";  
  }

  $guardar_usuario = false; 

  if(count($errores) == 0) {
    $guardar_usuario = true; 

    //cifrar la contraseña 
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

    //insertar usuario en la BBDD
    $sql = "INSERT INTO clientes VALUES ( null, '$nombre', '$apellido', '$razonSocial', '$telefono', '$email', '$password_segura', '$pais', '$provincia' );";
    $guardar = mysqli_query($db, $sql);

    if($guardar) {
      $_SESSION['completado'] = "el Registro se ha realizado con éxito";
    }else {
      $_SESSION['errores']['general'] ="fallo al realizar el Registro";
    }

  }else {
    $_SESSION ['errores'] = $errores; 
     
  }

}  
header ('Location: users.php');