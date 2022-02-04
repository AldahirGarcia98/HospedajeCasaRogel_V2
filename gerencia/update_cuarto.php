<?php
   include "../conexion/conexion.php";
   $id_cuarto=$_REQUEST['id_cuarto'];
   $estado=$_REQUEST['estado'];


$update = ("UPDATE  numero_cuarto
	SET 
estado='".$estado."'

WHERE id_cuarto='" .$id_cuarto. "'
");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='../gerencia/numero_cuarto.php';
    </script>";

?>