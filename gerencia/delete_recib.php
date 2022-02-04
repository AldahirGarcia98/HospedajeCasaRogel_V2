<?php
  include "../conexion/conexion.php";

  $id= $_POST['id'];

  // Eliminar 
  $query = "DELETE FROM registro_habitaciones WHERE id= '$id'";
  $resultado = $conexion->query($query);

?>