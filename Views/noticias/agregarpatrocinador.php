<div class="content">
<div class="box-principal">
<h3 class="titulo">Agregar Patrocinador <?php echo $datos['nombre']; ?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Agregar un nuevo Patrocinador <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputEmail" class="control-label" >Nombre</label>
                  <input class="form-control" name="titulo" type="text" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Descripcion</label>
                <textarea id="contenidonoticias" name="contenido">Next, get a free TinyMCE Cloud API key!</textarea>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label" >Url</label>
                  <input class="form-control" name="titulo" type="text" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Agregar</button>
                <button type="reset" class="btn btn-warning">Borrar</button>
              </div>
            </form>
          </div>
        </div class="col-md-1">
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea#contenidonoticias' });</script>
