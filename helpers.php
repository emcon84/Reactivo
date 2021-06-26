<?php 
function mostrarErrores($errores, $campo) {
    $alerta = ''; 
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alert-warning'>".$errores[$campo]. '</div>';
    }

    return $alerta;
}

function borrarErrores(){
    $borrado = false; 

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }

    if(isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null; 
        unset($_SESSION['completado']);
     }

    return $borrado;
}

function conseguirPresupuestos($conexion, $id) {
    $sql = "SELECT * FROM presupuesto WHERE Id_Cliente = $id;";
    $presupuestos = mysqli_query($conexion, $sql);

    $resultado = array(); 
    if($presupuestos && mysqli_num_rows($presupuestos)>=1) {
        $resultado = $presupuestos;
    }

    return $resultado;

}

function conseguirBriefing($conexion, $id) {
    $sql = "SELECT * FROM briefing WHERE id_Cliente = $id;";
    $briefing = mysqli_query($conexion, $sql);

    $resultado = array();
    if($briefing && mysqli_num_rows($briefing)>=1) {
        $resultado = $briefing;
    }

    return $resultado;
}

function conseguirArchivos($conexion, $id) {
    $sql = "SELECT * FROM archivos WHERE Id_cliente = $id;";
    $archivos = mysqli_query($conexion, $sql);

    $resultado = array();
    if($archivos && mysqli_num_rows($archivos) >= 1) {
        $resultado = $archivos;
    }

    return $resultado;
}