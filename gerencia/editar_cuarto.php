<div class="modal fade" id="editChildresn<?php echo $row['id_cuarto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


      <form method="POST" action="update_cuarto.php">
        <input type="hidden" name="id_cuarto" value="<?php echo $row['id_cuarto']; ?>">

            <div class="modal-body" id="cont_modal">

               
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">STATUS </label>
                  <input type="text" name="estado" class="form-control" value="<?php echo $row['estado']; ?>" required="true">
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
