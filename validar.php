<?php 
//conectar a bd; 
require_once 'conexion.php';

//recoger datos del formulario
if(isset($_POST)) {
    $email= $_POST['email'];
    $password= $_POST['password'];

    //consulta para comprobar credenciales del user
    $sql = "SELECT * FROM clientes WHERE Email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        
        //comprobar contraseña
        $verify= password_verify($password, $usuario['Password']);
        
        if($verify) {
            //Utilizas una session para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

                if(isset($_SESSION['error_login'])){
                unset($_SESSION['error_login']);
            }
            header ('Location: clientes.php');

        }else {
            $_SESSION['error_login'] = "login incorrecto";
            header('Location: users.php');
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "login incorrecto";
        header('Location: users.php');
        
    }
    

}

//redigir a clientes
/*header ('location: clientes.php');*/