
<div class="content">
<div class="box-principal">
<h3 class="titulo">Ver Noticia <?php echo $datos['nombre']; ?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Ver Noticia <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="img-responsive" src="<?php echo URL; ?>Views/Templates/imagenes/avatars/<?php echo $datos['imagen']; ?>" />
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
                  <input class="form-control" type="text"   disabled="true" name="nombre" value="<?php echo $datos['nombre']; ?> "  >
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Edad</label>
                  <input class="form-control" type="number"  disabled="true" name="edad" value="<?php echo $datos['edad']; ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Promedio</label>
                  <input class="form-control" type="number" disabled="true" name="promedio"  value="<?php echo $datos['promedio']; ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail">Seccion</label>
                  <input class="form-control"  disabled="true" name="seccion"  value="<?php echo $datos['nombre_seccion']; ?>" required>
              </div>


            </form>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
