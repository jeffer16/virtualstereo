<?php
//require_once "Views/Templates/template.php";
$noticias=$dash->listarNoticias();
$comentarios=$dash->listarComentarios();

?>
        <section class="SliderMajor-container">

          <div id="carousel-example-generic" class="carousel slide Slider slidercontainer" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active Slider-Item">
            <img class="img" src="<?php echo URL ?>/Views/Templates/imagenes/avatars/2Q==.jpg" alt="image1">
            <div class="q">Una Emisora en la Red
              Para la Comunidad Latina
              en todo el mundo
            </div>
            <div class="mask flex-center waves-effect waves-light"></div>
            <div class="SliderText-container FirstSlider-text" id="NonShowText">
            </div>
          </div>
        <div class="item Slider-Item">
          <img class="img" src="<?php echo URL ?>/Views/Templates/imagenes/avatars/microphone.jpg" alt="james">
          <h3>Quienes Somos </h3>
          <div class="q">VIRTUAL STEREO NET. Es una Emisora en la Red que nace como una alternativa para acompañar a los Colombianos y la Comunidad Latina en todo el mundo con una programación estilo Cross Over, orientada a fomentar los valores civicos, el conocimiento de las culturas, informar sobre los acontecimientos mas importantes que afectan la vida cotidiana, noticias de interés, escuchando la música que trasciende todas las fronteras gracias al fantástico mundo de la web

  A través de la red los oyentes pueden interactuar enviando mensajes, solicitando los temas musicales de su agrado, para dedicarla al Ser que lo acompaña en el pensamiento o escucharlo en sus momentos de Alegria o de Nostalgia

  Gracias por apoyarnos

  Somos: EMISORA VIRTUAL STEREO NET, Tu Emisora en la Red

  Encuentranos: www.virtualstereonet.mex.tl

  Email: virtualstereonet@gmail.com
          </div>
        </div>
        <div class="item Slider-Item">
          <img class="img" src="<?php echo URL ?>/Views/Templates/imagenes/avatars/mixer.jpg" alt="james">
          <div class="q">Virtual Stereo Net
          </div>
        </div>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <div class="LogoBottom-container">
        <img class="logoindex" src="<?php echo URL ?>/Views/Templates/imagenes/avatars/logo.jpg" alt="image1">
      </div>

    </div>
    </section>
    <div class="comentario">
      <?php
      $texto="";
      while($row=$comentarios->fetch(\PDO::FETCH_ASSOC)){
        //print_r($row['contenido']);
        $texto.=' - '.trim($row['contenido']," ");

       ?>


    <?php
       }
       echo 'fdfd';
       print_r($texto);
     ?>
       <marquee class="comentarios" width="100%" style="font-family: Arial; font-size: 14pt" scrolldelay="150" height="30"><?php echo $texto ?></marquee>


    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>






    </div>
  <section class="row" style="margin:0">
  <section class="col-md-10">
    <section class="sectionin">


      <h2 class="textimage">¡Escucha la mejor música de todos los tiempos en una sola estación¡</h2>
    <img class="logoindex" src="<?php echo URL ?>/Views/Templates/imagenes/avatars/logo.jpg" alt="image1">

          <h4>La mejor Música y la mas agradable compañia en la red</h4>
          <h5 class="virtual">
            Virtual Stereo Net
          </h5>
            <h4>
            Una Emisora en la Red para la Comunidad Latina en todo el mundo
            </h4>
            </section>

        <section>

          <div id=tabla1>
       <div id=cabtab1>
        Noticias
       </div>
       <div id=cuerpotab1 class="">
         <?php
         while($row=$noticias->fetch(\PDO::FETCH_ASSOC)){
           //print_r($row);
          ?>
       <article class="contenido">
         <span>2017-07-07</span>
         <h4></h4>
         <div class="">
         </div>
         <div class="form-group">
           <?php echo $row['titulo'] ?>
         </div>

         <div class="form-group">
           <?php echo $row['contenido'] ?>
         </div>

       </article>
       <?php
          }
        ?>

       </div>
    </div>
        </section>

  </section>
  <section class="col-md-2 SectionNav">
    <article>
      <h6>Oyentes</h6>
      <form class="" action="http://localhost/proyecto/dashboard/agregar" method="post">
      <textarea class="texta" name="contenido" placeholder="Enviar saludos en vivo aqui."></textarea>
      <button type="submit" name="button">Enviar</button>
    </form>
    </article>
    <article>
      <h6>Categorias Noticias</h6>
    </article>
    <article>
      <h6>Seguidores</h6>
    </article>
    <article>
      <h6>Visitantes</h6>
    </article>
  </section>
  </section>
  <iframe width="0" height="0" src="http://www.ustream.tv/embed/23123978?html5ui&volume=100&autoplay=true" scrolling="no" allowfullscreen webkitallowfullscreen frameborder="0" style="border: 0 none transparent;" style="display: none;"></iframe>
