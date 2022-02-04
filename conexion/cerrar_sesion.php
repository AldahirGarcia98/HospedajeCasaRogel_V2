<?php 
	session_start();
	session_destroy();
    echo " <script> alert ('Sesion Cerrada De Manera Exitosa'); 
    location.href = '../index.php';
    </script>";
 ?>