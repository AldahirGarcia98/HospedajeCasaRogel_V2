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
                <a href="reservaciones.php"><b>Reservaciones</b></a>
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
                       <caption>CUARTOS</caption>
                          <tr>
                          <th scope="col">ID CUARTO </th>
                            <th scope="col">ID HABITACION</th>
                            <th scope="col">NUMERO HABITACION</th>
                            <th scope="col">ESTADO</th>
                           
                            <th colspan="2">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                               
                                include "../conexion/conexion.php";
                               
                                $msql="SELECT * FROM numero_cuarto"; 
                                $resultado=mysqli_query($conexion, $msql);
                            
                                while($row=mysqli_fetch_array($resultado)){
                                ?>
                        <tr>
                          <td> <?php echo $row["id_cuarto"]?></td>
                            <td><?php echo $row["id_habitacion"]?></td>
                            <td><?php echo $row["numero_habitacion"]?></td>
                            <td><?php echo $row["estado"]?></td>
                           
                         
                            
                           <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $row['id_cuarto']; ?>">
                                  Modificar</button></td>
                        </tr>
                            <?php  include('editar_cuarto.php'); ?>
                           
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
        var id = $(this).attr("id_cuarto");

        var dataString = 'id_cuarto='+ id_cuarto;
        url = "../gerencia/delete_cuarto.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="../gerencia/numero_cuarto.php";
                  $('#respuesta').html(data);
                }
            });
    return false;
    });
});
</script>
</body>
</html>
