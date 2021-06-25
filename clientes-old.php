<?php  include ("header.php"); 
      
       require_once 'helpers.php'; 
        
?>

<?php if(isset($_SESSION['usuario'])): ?>

    <div class="container p-5">
        <div class="alert-success">
            <h3 class="p-3">
                Bienvenido <?= $_SESSION['usuario'] ['Nombre']. ' '.$_SESSION['usuario']['Apellido']; ?>   
            </h3>

        </div>

        <div class="col-lg-12 p-5">
            <?php $presupuestos = conseguirPresupuestos($db, $_SESSION['usuario']['Id_cliente']); ?>
            <div class="col-lg-12  p-3">
                <h3 class="py-3 text-center">Presupuestos</h3>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($presupuesto = mysqli_fetch_assoc($presupuestos)): ?>
                        <tr>                        
                        <th scope="row"><?= $presupuesto['id_Presupuesto']?></th>                        
                        <td class="w-100"><?= $presupuesto['Descripcion']?></td>
                        <td><a href="<?= $presupuesto['Link']?>" class="btn btn-warning" target="blank"><i class="bi bi-cloud-arrow-down-fill"></i></a> </td>
                        </tr>
                        <tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>


            <?php $briefing = conseguirBriefing($db, $_SESSION['usuario']['Id_cliente']); ?>
            
            <div class="col-lg-12  p-3">
                <h3 class="py-3 text-center">Briefing</h3>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($brief= mysqli_fetch_assoc($briefing)): ?>
                        <tr>
                        <th scope="row"><?= $brief['id']?></th>
                        <td class="w-100"><?= $brief['Descripcion']?></td>
                        <td><a href="<?= $brief['link']?>" class="btn btn-warning" target="blank"><i class="bi bi-cloud-arrow-down-fill"></i></a> </td>
                        </tr>
                        <tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
                          

            </div>
            
            <?php $archivos = conseguirArchivos($db, $_SESSION['usuario']['Id_cliente']); ?>
            
            <div class="col-lg-12  p-3">
                <h3 class="py-3 text-center">Archivos</h3>
                <?php if($archivos){ ?>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php while ($archivo = mysqli_fetch_assoc($archivos)): ?>
                        
                        <tr>
                        <th scope="row"><?= $archivo['Id_trabajo']?></th>
                        <td class="w-100"><?= $archivo['Descripcion']?></td>
                        <td><a href="<?= $archivo['LinkDescarga']?>" class="btn btn-warning" target="blank"><i class="bi bi-cloud-arrow-down-fill"></i></a> </td>
                        </tr>
                        <tr>
                        
                    <?php endwhile; ?>
                   
                    </tbody>
                </table>
                <?php } 
                        else {
                           echo "no existen archivos de entrega para descargar";
                        }
                    ?>
                <hr>
                
            </div>
            <div class="tex-end my-4">
            <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar</a>
        </div> 
                       
        </div>
         
        
    </div>
    
<?php endif; ?> 

<?php include ("footer.php"); ?>