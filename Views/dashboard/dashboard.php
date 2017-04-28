<div class="content">
<div class="box-principal">
<h3 class="titulo">Editar Noticias <?php echo $datos['nombre']; ?><hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Editar una nueva Noticia <?php echo $datos['nombre']; ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputEmail" class="control-label">Titulo</label>
                  <input class="form-control" name="titulo" type="text" value="<?php echo $datos['titulo'];  ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label">Contenido</label>
                <!DOCTYPE html>
                <html>
                <head>
                  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                  <script>tinymce.init({ selector:'textarea' });</script>
                </head>
                <body>
                  <textarea>Next, get a free TinyMCE Cloud API key!</textarea>
                </body>
                </html>
                  <input class="form-control" name="cotenido" type="text" value="<?php echo $datos['contenido'];  ?>"required>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Editar</button>
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
