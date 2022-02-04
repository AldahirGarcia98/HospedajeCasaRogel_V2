<?php
require "conexion.php";
$id_habitacion=  $_POST['id_habitacion'];
$queryNh =mysqli_query($conexion, "SELECT id_cuarto, numero_habitacion FROM numero_cuarto WHERE id_habitacion='$id_habitacion' AND estado='libre' ORDER BY id_cuarto");
$resNh = ($queryNh);

$html= "<option value='0'>Habitaciones disponibles:</option>";

while($rowNh = $resNh->fetch_assoc()){
    $html.= "<option value='".$rowNh['numero_habitacion']."'>".$rowNh['numero_habitacion']."</option>";
}

echo $html;
?>
