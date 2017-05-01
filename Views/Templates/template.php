<?php namespace Views\Templates;
    $template =  new template();
    class template{
      public function __construct()
      {
?>
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <title>Virtualstereonet</title>
            <link rel="stylesheet" href="<?php echo URL; ?>Views/Templates/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo URL; ?>Views/Templates/css/general.css">
            <link rel="stylesheet" href="<?php echo URL; ?>Views/Templates/css/mdb.min.css">
          </head>
          <body>
            <header class="">
            <nav class="navbar navbar-inverse navbar-fixed-top MainMenu">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toogle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" name="button">
                      <span class="sr-only"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="#">Emisora Virtual Estereo-tu Emisora en la Red</a>
                    <a class="navbar-brand" href="#"></a>

                  </div>
                <div class="collapse navbar-collapse Barra" id="#bs-example-navbar-collapse-2">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo URL; ?>">Inicio</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Noticias</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo URL; ?>noticias">Listados</a></li>
                        <li><a href="<?php echo URL; ?>noticias/agregar">Agregar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Comentarios</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo URL; ?>secciones">Listados</a></li>
                        <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://cbisenapalmira.blogspot.com.co/"></a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
<?php
      }
      public function __destruct()
      {
?>


  <footer class="Footer">
	<div class="link-r">
		<div class="social">
			<!-- <ul class="ul-links">
				<li class="link-redes"><a href="https://www.facebook.com/PicMen%C3%BA-1660696487495369/?fref=ts" target="_blank" class="fa fa-facebook facebook"></a></li>
				<li class="link-redes"><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram instagram"></a></li>
				<li class="link-redes"><a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter twitter"></a></li>
			</ul> -->
		</div>
	</div>

	<div class="Footer-left">
		<p class="Footer-item">Hola Amigos</p>
			<a class="icon"> Mi nombre es James Gallego, soy Locutor, Periodista, Productor, Editor de Audio y Video.
<br>
<br>
Un día salí de mi hermoso País Colombia y emprendí una corta pero enriquecedora gira por varios países del mundo, entre ellos: Estados Unidos, Holanda, Egipto, Israel, España, Paris, Italia, Panamá, Venezuela y Brasil.
<br>
<br>
Allí pude conocer diferentes culturas entre ellas su música.
<br>
<br>
Pero me causo curiosidad que no escuche en estos países de Norte América, Europa y Norte de Frica, los ritmos que identifican la alegría y la afabilidad de los colombianos que a través de nuestra música irradiamos identidad y alegría para el mundo.
<br>
<br>
Entonces me propuse crear una estación radial virtual que colmara las expectativas de un gran número personas y como yo, que quieren escuchar no solo un género específico, sino las grandes alternativas que nos ofrece el fantástico mundo de la música sin importar su origen ni el lugar del mundo donde te encuentres.
<br>
<br>
Hoy coloco a su entera disposición La Emisora VIRTUAL STEREO NET, seguramente será su más fiel compañía en sus ratos de alegría o de grandes sentimiento, acompañado con sus amigos o en los momentos de nostalgia, porque somos la mejor alternativa en la Red.
<br>
<br>
Tu apoyo o contribución mediante el patrocinio será lo más importante para ampliar nuestra visión futurista.
<br>
<br>
Que Dios los Bendiga
<br>
<br>
Con Aprecio
<br>
<br>
JAMES GALLEGO
<br>
<br>
Director.</a>
	</div>
	<div class="Footer-left">
		<p class="Footer-item">Al Aire</p>
			<p class="fleft">(+57)3122838431</p>
      <p class="fleft">EMISORA VIRTUAL STEREO, COLOMBIA</p>
      <p class="fleft">virtualstereonet@gmail.com</p>

	</div>
	<div class="Footer-left">
		<p class="Footer-item ">Envianos tu mensaje</p>
    <input type="text" name="correo electronico" placeholder="correo electronico"></input>

    <input type="text" name="mensaje" placeholder="mensaje"></input>	</div>

</footer>

        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="<?php echo URL; ?>Views/Templates/js/bootstrap.js">
        </script>
        <script src="<?php echo URL; ?>Views/Templates/js/mdb.min.js">
        </script>
        <script>
        new WOW().init();
        </script>

        </div>
        </body>
        </html>
<?php
      }
    }
?>
