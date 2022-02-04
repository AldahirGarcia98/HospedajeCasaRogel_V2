<?php
require "conexion.php";
$id_habitacion=  $_POST['id_habitacion'];
$queryNh =mysqli_query($conexion, "SELECT id_costo, costo_habitacion FROM costo_habitacion WHERE id_habitacion='$id_habitacion' ORDER BY id_costo");
$resNh = ($queryNh);

while($rowNh = $resNh->fetch_assoc()){
    $html.= "<option value='".$rowNh['costo_habitacion']."'>".$rowNh['costo_habitacion']."</option>";
}

echo $html;
?>
