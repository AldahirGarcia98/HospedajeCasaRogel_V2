<?php
   include "../conexion/conexion.php";
   $id=$_REQUEST['id'];
   $nombre=$_REQUEST['nombre'];
   $apellidos=$_REQUEST['apellidos'];
   $correo=$_REQUEST['correo'];
   $telefono=$_REQUEST['telefono'];
   $peronas=$_REQUEST['personas'];
   $menor=$_REQUEST['menor'];
   $fecha_inicio=date('Y-m-d', strtotime($_REQUEST['fecha_inicio']));
   $fecha_termino=date('Y-m-d', strtotime($_REQUEST['fecha_termino']));

$update = ("UPDATE  registro_habitaciones
	SET 
   nombre='" .$nombre."',
   apellidos='" .$apellidos."',
   correo='" .$correo."',
   telefono='" .$telefono."',
   id_adult='".$peronas."',
   id_menor='".$menor."',
   fecha_inicio='" .$fecha_inicio."',
   fecha_termino='" .$fecha_termino."'
	
WHERE id='" .$id. "'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='../gerencia/reservaciones.php';
    </script>";

?>