<?php  require_once 'conexion.php';    

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <title>Reactivo</title>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-sm bg-dark py-4">
    <div class="container">
      <div class="logo">
        <img src="img/logo.svg" width="250" alt="">
      </div>

      <button class="navbar-toggler" 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navbarToggleExternalContent" 
              aria-controls="navbarToggleExternalContent"
              aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav ms-auto py-3 text-center">
          <li class="nav-item"><a class="nav-link px-3" href="index.php">Inicio</a> </li>
          <li class="nav-item"><a class="nav-link px-3" href="profile.php">Perfil</a> </li>
          <li class="nav-item"><a class="nav-link px-3 disabled" href="servicios.php">Servicios</a> </li>
          <li class="nav-item"><a class="nav-link px-3 disabled" href="contacto.php">Contacto</a> </li>          
          <li class="nav-item"><a class="nav-link px-3" href="users.php"><i class="bi bi-person-plus-fill"></i></i> Login/Registro</a></li>
          
        </ul>
      </div>
      
    </div>
  </nav>
  
 

  
