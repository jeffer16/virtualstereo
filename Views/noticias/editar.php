<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="content">
<div class="box-principal">
<h3 class="titulo">Editar Estudiante <?php echo $datos['nombre']; ?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar Estudiante <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <form class="row" enctype="multipart/form-data" action="" method="POST">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-body" >
                <img class="img-responsive" src="<?php echo URL; ?>Views/Templates/imagenes/avatars/<?php echo $datos['imagen']; ?>" />
                
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-horizontal"  >
              <div class="form-group">
                <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
                  <input class="form-control" type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Edad</label>
                  <input class="form-control" type="number" name="edad" value="<?php echo $datos['edad']; ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Promedio</label>
                  <input class="form-control" type="number" name="promedio"  value="<?php echo $datos['promedio']; ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Sección (<b>Sección Actual: <?php echo $datos['nombre_seccion']; ?></b>)</label>
                  <select name="id_seccion" class="form-control">
                    <?php while($row = $secciones->fetch(\PDO::FETCH_ASSOC)){ ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                  </select>

              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
</div>
