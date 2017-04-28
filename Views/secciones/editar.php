<div class="content">
<div class="box-principal">
<h3 class="titulo">Editar Seccion <?php echo $datos['nombre']; ?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar Seccion <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-9">
            <form class="form-horizontal" action=""
             method="POST" enctype="multipart/form-data">
              <!-- <input class="form-control" type="hidden" name="id"  value="" required> -->
              <div class="form-group">
                <label for="inputEmail" class="control-label">Nombre de la seccion</label>
                  <input class="form-control" type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
