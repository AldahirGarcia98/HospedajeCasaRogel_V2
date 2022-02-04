
<div class="modal fade" id="editChildresn<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(56, 152, 199) !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="update_recib.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellidos</label>
                  <input type="text" name="apellidos" class="form-control" value="<?php echo $row['apellidos']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo</label>
                  <input type="text" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono</label>
                  <input type="text" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>" required="true">
                </div>
                 
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Adultos</label>
                  <input type="text" name="personas" class="form-control" value="<?php echo $row['id_adult']; ?>" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Niños</label>
                  <input type="text" name="menor" class="form-control" value="<?php echo $row['id_menor']; ?>" required="true">
                </div>

                
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de Inicio</label>
                  <input type="text" name="fecha_inicio" class="form-control" value="<?php echo $row['fecha_inicio']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de salida</label>
                  <input type="text" name="fecha_termino" class="form-control" value="<?php echo $row['fecha_termino']; ?>" required="true">
                </div>
             


               
                
                
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>


