<?php
$alert='';

if(!empty($_POST)){
    if(empty($_POST['admin']) || empty($_POST['password'])){
    echo " <script> alert('No pueden exisitr campos vacios');
    location.href = '../login.html';
     </script>";
    }else{
include 'conexion.php';
$admin= $_POST["admin"];
$pass= $_POST["password"];
$loginAdm= mysqli_query($conexion, "SELECT * FROM gerencia WHERE usuario= '$admin' AND contra='$pass'");
$resultAdm= mysqli_num_rows($loginAdm);

if($resultAdm > 0){
$dato = mysqli_fetch_array($loginAdm);
 session_start(); //iniciamos una sesion
 $_SESSION['active'] = true;
 $_SESSION['user'] = $dato['admin'];

 echo " <script> alert ('INICIO DE SESION EXITOSO'); 
 location.href = '../gerencia/reservaciones.php';
 </script>";
}else{
    echo " <script> alert('ERROR USUARIO U CONTRASEÑA INCORRECTOS');
    location.href = '../login_admin.html';
     </script>";
}
}
}

?>