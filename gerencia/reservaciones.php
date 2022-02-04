<?php
session_start();
if(empty($_SESSION)){
    echo " <script> alert('No se puede ingresar de esta manera');
    location.href = '../index.php';
     </script>";
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerencias</title>
    <link rel="stylesheet" href="../css/login_admin.css">
    <link rel="shortcut icon" href="../img/hotel.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
  

</head>
<body>
    <main>
        <header>
            <nav>
                <a href="numero_cuarto.php"><b>Habitaciones</b></a>
                <a href="../conexion/cerrar_sesion.php"><b>Cerrar Sesion</b></a>
    
            </nav>
            <section class="textos-header">
                <h1>HOSPEDAJE CASA ROGEL</h1>
                <h2>La mejor opcion, para tu descanso</h2>
            </section>
            <div class="wave" style="height: 100px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                    style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg></div>
        </header>
        <h2 class="titulo"><u>Por favor revise que los datos sean correctos</u></h2>
      
        <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                  
                        <thead>
                       <caption> <b> RESERVACIONES </b></caption>
                          <tr>
                          <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Habitacion</th>
                            <th scope="col">Adultos</th>
                            <th scope="col">Niños</th>
                            <th scope="col">Llegada</th>
                            <th scope="col">Salida</th>
                            <th colspan="2">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                               
                                include "../conexion/conexion.php";
                               
                                $msql="SELECT * FROM registro_habitaciones ORDER BY id ASC"; 
                                $resultado=mysqli_query($conexion, $msql);
                            
                                while($row=mysqli_fetch_array($resultado)){
                                ?>
                        <tr>
                          <td> <?php echo $row["id"]?></td>
                            <td><?php echo $row["nombre"]?></td>
                            <td><?php echo $row["apellidos"]?></td>
                            <td><?php echo $row["correo"]?></td>
                            <td><?php echo $row["telefono"]?></td>
                            <td><?php echo $row["id_costo"]?></td>
                            <td><?php echo $row["id_tipo"]?></td>
                            <td><?php echo $row["id_adult"]?></td>
                            <td><?php echo $row["id_menor"]?></td>
                            <td><?php echo $row["fecha_inicio"]?></td>
                            <td><?php echo $row["fecha_termino"]?></td>
                          <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $row['id']; ?>">
                                  Eliminar</button></td> 
                            
                           <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $row['id']; ?>">
                                  Modificar</button></td>
                        </tr>
                            <?php  include('Editar.php'); ?>
                            <?php include('Eliminar.php'); ?>
                        <?php } ?>
                    </table>
        </div>
    </main>
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Telefono</h4>
            <p>786-114-1737</p>
            <p>786-105-1140</p>
        </div>
        <div class="content-foo">
            <h4>Correo</h4>
            <p>info@casarogelhospedaje.mx</p>
        </div>
        <div class="content-foo">
            <h4>Direccion</h4>
            <p>Aldama 3, Centro, 61290 <br> Senguio, Mich.</p>
        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

      

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);
    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "../gerencia/delete_recib.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="../gerencia/reservaciones.php";
                  $('#respuesta').html(data);
                }
            });
    return false;
    });
});
</script>
</body>
</html>
