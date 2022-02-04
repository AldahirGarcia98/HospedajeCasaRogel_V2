<?php
include 'conexion.php';

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$id_habitacion=$_POST['cbx_hab'];
$id_costo=$_POST['cbx_costo'];
$id_tipo=$_POST['cbx_tipo'];
$fecha_inicio=date('Y-m-d', strtotime($_POST['finicio']));
$fecha_salida=date('Y-m-d', strtotime($_POST['fsalida']));
$id_adult=$_POST['personas'];
$id_menor=$_POST['menores'];

$resIns=mysqli_query($conexion, ("INSERT INTO registro_habitaciones(nombre,apellidos,correo,telefono,id_habitacion,id_costo,id_tipo,id_adult,id_menor,fecha_inicio,fecha_termino)
VALUES ('$nombre','$apellidos','$correo','$telefono','$id_habitacion','$id_costo','$id_tipo','$id_adult','$id_menor','$fecha_inicio','$fecha_salida')"));
if($resIns){
  echo " <script> alert ('Datos enviados exitosamente, apartir de este moemento usted cuenta con 24 horas para depositar al numero de cuenta: 5204-1656-1355-2094 y enviar el recibo al correo: info@casarogelhospedaje.mx'); 
  location.href = '../index.php';
    </script>";
  }else{
      echo " <script> alert('Error al enviar los datos');
      location.href = '../index.php';
       </script>";
  }

?>