<!DOCTYPE html>
<html lang="en">
	<head>
	<script charset="UTF-8" src="//web.webpushs.com/js/push/330c82b25279f200c19e8feeffb26a60_0.js" async></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/logo.png"/>
		<meta name="description" content="Aqui puedes leer los mangas y novelas de isekai wa SmartPhone, también está disponible su descarga en PDF." />
		<link rel="image_src" src="/img/header2.jpg"/>
		<meta property="og:image" content="https://i.ibb.co/4WbPB5q/reproductor.jpg">
		<meta property="og:url" content="http://brunhild.dx.am">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Isekai wa SmartPhone">
		<meta property="og:description" content="Aqui puedes leer los mangas y novelas de isekai wa SmartPhone, también está disponible su descarga en PDF.">
		<meta name="keywords" content="manga, noveas, ligeras, web, isekai, smartphone, touya, yumina" />
		<title>Isekai Wa Smartphone</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
 		<link type="text/css" rel="stylesheet" href="css/personalizado.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script charset="UTF-8" src="//web.webpushs.com/js/push/330c82b25279f200c19e8feeffb26a60_0.js" async></script>
    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<div class="col-md-9">
							<div>
								<h1 class="header-isekai">Isekai Wa Smarthpone</h1>
							</div>
						</div>

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!-- /Wishlist -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="manga.php">Manga</a></li>
						<li><a href="novelas.php">Novelas Ligeras</a></li>
						<li><a href="sugerencias.php">Sugerencias</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- Cuerpo -->
		<div class="container">
		<br>
			<!-- c1 -->
			<div class="row">
				<div class="col"  id="sinopsis">
					<h2>
						Sinopsis:
					</h2>
					<p>
					Después de un extraño accidente en el que lo mataron unos rayos, el joven de 15 años Mochizuki Touya se despierta para encontrarse cara a cara con Dios. “Lamento decir que he cometido un error…” se queja el viejo gruñón antes de decirle que puede reencarnarle en un Touya de un mundo de fantasía y, como recompensa, le permite llevarse su smartphone.
					Y así comienza la aventura de Touya en un nuevo mundo pseudo-medieval y anacrónico. ¡Amigos! ¡Risas! ¡Lágrimas! ¡Inexplicable Deus ex Machina! El chico se embarca en un viaje lleno de cosas increíbles, viajando distraídamente de un lugar a otro, siguiendo cualquier objetivo que le atraiga.
					¡Las cortinas se levantan en un cuento épico de espadas, brujería y… aplicaciones de smartphone!
					</p>
				</div>
			</div>
			<!-- /c1 -->
				<?php
					require_once "conexion.php";
					$db = new Conexion();
					$consulta= "SELECT * FROM publicaciones";
					$res = $db->query($consulta);
					while ($u= $res->fetch()){
				?>
					
			<!-- Publicaciones -->
			<div class="row">
				<div class="col" id="<?php echo $u['idt']; ?>">
					<h2 id="nl18"><?php echo $u['titulo']; ?></h2>
					<?php echo $u['contenido']; ?>
				</div>
			</div>
			<!-- /Publicaciones -->
			<?php } ?>
		</div>
		<!-- /cuerpo -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="col">
							<div class="footer">
								<h3 class="footer-title">Informacion extra:</h3>
								<p>El contenido publicado aquí no es de mi autoría, solo es una recopilación de contenido de internet y con el permiso de sus autores, puedes visitar sus sitios en los siguientes enlaces.</p>
								<ul class="footer-links">
									<li><a href="https://trueflamesproject.wixsite.com/light-novel">True Flames Project. (traductores de la NL)</a></li>
									<li><a href="https://www.facebook.com/Isesumafans">Isekai Wa Smartphone To Tomonni - FANS (traductores del manga)</a></li>
								</ul>
							</div>
						</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								brunhild.dx.am &copy;<script>document.write(new Date().getFullYear());</script> 
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>