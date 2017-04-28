<div class="content">
<div class="box-principal">
<h3 class="titulo">Listado de Noticias<hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de Noticias</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Contenido</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php   while($row = $datos->fetch(\PDO::FETCH_ASSOC)){  ?>
          <tr>
                <td><img class="imagen-avatar" src="<?php echo URL;?>Views/Templates/imagenes/avatars/<?php echo $row['imagen']; ?>" alt="estudiantes" /></td>
                <td><a  href="<?php echo URL; ?>noticias/ver/<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['contenido']; ?></td>
                <td><a class="btn btn-warning" href="<?php echo URL;  ?>noticias/editar/<?php echo $row['id']; ?>">Editar</a>
                <a class="btn btn-danger" href="<?php echo URL;  ?>noticias/eliminar/<?php echo $row['id']; ?>">Eliminar</a></td>


          </tr>
            <?php } ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
</div>
