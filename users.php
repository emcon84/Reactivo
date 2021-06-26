<?php include ("header.php"); 
      
      require_once 'helpers.php';  
?>


<div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 p-5">

          <?php if(isset($_SESSION['usuario'])):?>
            
            <div class="alert-success my-5 p-3 text-center">
              <h5><?=$_SESSION['usuario']['Nombre'].' '. $_SESSION['usuario']['Apellido']; ?></h5>              
            </div>
            <div class="tex-end my-4">
                  <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar</a>
            </div>

          <?php endif; ?>

            <h2>Ingresa a tu área de Cliente</h2>
            <form action="validar.php" method="POST">
              <?php if(isset($_SESSION['error_login'])):?>
              
                <div class="alert-danger my-5 p-3 text-center">
                  <h5><?=$_SESSION['error_login']; ?></h5>
                </div>
               
                

            <?php endif; ?>
            <div class="mb-3 my-5">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
           
            <button type="submit" class="btn btn-warning">Enviar</button>
            
            </form>
          
        </div>
        <div class="col-lg-6 col-md-12 p-5">
            <h2>Resgistrate </h2>
            <p>haciendolo, podras acceder a consultar por presupuestos y tener tu área de cliente para todo tipo de autogestion</p>
            <?php if(isset($_SESSION['completado'])) : ?>
              <div class="alert-success">
                <?= $_SESSION['completado'];?>
              </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
              <div class="alert-danger">
                <?= $_SESSION['errores']['general']; ?>
              </div>
            <?php endif; ?>
            <form action="registro.php" method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'nombre') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'apellido') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="razon-social" class="form-label">Razón Social</label>
              <input type="text" class="form-control" id="razonSocial" name="razonSocial">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'razonSocial') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="telefono" name="telefono">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'telefono') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'email') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'password') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="pais" class="form-label">País</label>
              <input type="text" class="form-control" id="pais" name="pais">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'pais') : '' ; ?>
            </div>
            <div class="mb-3">
              <label for="provincia" class="form-label">Provincia</label>
              <input type="text" class="form-control" id="provincia" name="provincia">
              <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'] , 'provincia') : '' ; ?>
            </div>
           
            <button type="submit" class="btn btn-warning" name="submit">Enviar</button>
            
            </form>
            <?php borrarErrores();?>
        </div>

    </div>
</div>

<?php include ("footer.php"); ?>