<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Peluditos</title>
	<link rel="stylesheet" href="<?php echo(base_url('public/styles/estilos.css'))?>">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yaldevi:wght@200;300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
	<header>
			<nav class="navbar navbar-expand-lg navbar-dark fondo">
  				<div class="container-fluid">
    				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
						Peluditos</a>
    				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      					<span class="navbar-toggler-icon"></span>
    				</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="<?= site_url('/productos/registros') ?>">Registro Productos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=site_url('/animales/registros')?>">Registro Animales</a>
							</li>
						</ul>
					</div>
  				</div>
			</nav>
	</header>
	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?=base_url('public/img/imagen1.jpg')?>" class="d-block w-100" alt="foto">
							</div>
							<div class="carousel-item">
								<img src="<?=base_url('public/img/imagen2.jpg')?>" class="d-block w-100" alt="foto">
							</div>
							<div class="carousel-item">
								<img src="<?=base_url('public/img/imagen3.jpg')?>" class="d-block w-100" alt="foto">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<main>
		<div class="container fuente mt-5">
			<div class="row d-flex justify-content-center">
				<div class="col-8 text-center">
					<h2>Casa Hogar Peluditos</h2>
					<p>Casa hogar Peluditos, atiende desde 1996 animales y fauna silvertre en estado de abandono,
						ofreciendo atencion integral, ademas somos fabricantes de comida y accesorios para todo tipo de mascota. </p>
				</div>	
			</div>
			<div class="row d-flex justify-content-center text-center">
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=1) ?>"><img class="img-fluid w100 imgzoom" src="<?= base_url('public/img/dog-icon.png')?>" alt="dog"></a>
					<h3>perros</h3>
				</div>	
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=2) ?>"><img class="img-fluid w100 imgzoom" src="<?=base_url('public/img/cat-icon.png')?>" alt="cat"></a>
					<h3>gatos</h3>
				</div>	
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=3) ?>"><img class="img-fluid w100 imgzoom" src="<?=base_url('public/img/bird-icon.png')?>" alt="bird"></a>
					<h3>aves</h3>
				</div>	
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=6) ?>"><img class="img-fluid w100 imgzoom" src="<?=base_url('public/img/fish-icon.png')?>" alt="fish"></a>					
					<h3>peces</h3>
				</div>	
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=4) ?>"><img class="img-fluid w100 imgzoom" src="<?=base_url('public/img/horse-icon.png')?>" alt="horse"></a>					
					<h3>caballos</h3>
				</div>	
				<div class="col-1 me-5">
					<a href="<?= site_url('/animales/listadotipo/' . $tipo=5) ?>"><img class="img-fluid w100 imgzoom" src="<?=base_url('public/img/reptile-icon.png')?>" alt="reptile"></a>					
					<h3>reptiles</h3>
				</div>	
			</div>
		</div>
		<br>
		<div class="row fondoAdopcion">
		</div>

		<div class="container mb-5 intro">
			<div class="row mt-5">
				<div class="col-12 col-md-6">
					<img src="<?=base_url('public/img/perritos2.jpg')?>" alt="adopta" class="img-fluid w-100 rounded">
				</div>
				<div class="col-12 col-md-6 align-self-center">

					<h2 class="fuente fw-bold">Casa Hogar Peluditos</h2>
					<br>
					<p class="fuente">
						Somos una organización protectora de animales especializada, desde 1996, en la ayuda a perros y gatos maltratados y/o abandonados; una organización española totalmente independiente que no recibe subvenciones de organismos oficiales, empresas ni partidos políticos. Las cuotas de nuestros socios y las donaciones de nuestros simpatizantes permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción. Contamos con un centro veterinario en Medellín abierto al público, que destina sus ingresos íntegramente al cuidado de los animales abandonados, y un centro de acogida en El Espinar.
						<br>
						Defendemos el “sacrificio cero”. Esto significa que establecemos una línea muy clara entre “el sacrificio” y “la eutanasia”. Nunca sacrificamos cachorros recién nacidos, ni animales cojos, ciegos, sordos o con enfermedades crónicas que sean tratables. Exclusivamente en caso de enfermedad en fase terminal que produzca un sufrimiento irreversible, se recurre a la eutanasia con toda la dignidad, el respeto y el amor que ellos merecen.
					</p>

				</div>
			</div>
		</div>
	</main>

	<footer class="fondoDos p-5">

<div class="container-fluid">

<div class="row">
	<div class="col-12 col-md-4">
		<h3 class="fw-bold">Horario de atención:</h3>
		<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
		<br>
		<h3 class="fw-bold">Dirección:</h3>
		<p>Belén Altavista Calle 8A # 112-82 </p>
	</div>

	<div class="col-12 col-md-4">
		<h3 class="fw-bold">Ayudas:</h3>
		<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
		<br>
		<h3 class="fw-bold">Protección de datos:</h3>
		<p>Protección de datos personales en el Municipio de Medellín </p>
	</div>

	<div class="col-12 col-md-4">
		<h1 class="fw-bold fuente1"><span><i class="fas fa-paw"></i></span>PELUDITOS</h1>
		<br>
		<i class="fab fa-facebook fa-3x"></i>
		<i class="fab fa-instagram fa-3x"></i>
		<i class="fab fa-youtube fa-3x"></i>
		<br>
		<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
		
	</div>
</div>

</div>

</footer>

<!-- inconos fontawesome -->
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>