<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de animales</title>
    <link rel="stylesheet" href="<?php echo (base_url('public/styles/estilos.css')) ?>">
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
                            <a class="nav-link" href="<?= site_url('/animales/registros') ?>">Registo Animales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 fuente">
                    <form action="<?= site_url('/animales/registros/nuevo') ?>" method="POST">
                        <h2 style="text-align:center">Registro de Animales</h2>
                        <br>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad:</label>
                            <input type="num" class="form-control" id="edad" aria-describedby="edad" name="edad">
                        </div>
                        <div class="mb-3">
                            <label for="fotografia" class="form-label">Fotografia:</label>
                            <input type="text" class="form-control" id="fotografia" aria-describedby="fotografia" name="fotografia">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Descripción</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de animal:</label>
                            <select class="form-select" name="tipo">
                                <option value="1" selected>Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Caballo</option>
                                <option value="5">Reptil</option>
                                <option value="6">Pez</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </form>
                </div>
                <div class="col-6 align-self-center text-center">
                    <img class="d-block w-100" src="<?= base_url('public/img/perritos5.jpg') ?>" alt="dog">
                    <a href="<?= site_url('/animales/listado') ?>" class="btn btn-success btn-lg">Ver peluditos</a>
                </div>
            </div>
        </div>
    </main>
    <section>
        <?php if (session('mensaje')) : ?>

            <div class="modal fade" id="modalrespuesta" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header fondo text-white">
                            <h5 class="modal-title text-center">Casa Hogar Peluditos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5><?= session('mensaje') ?></h5>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif ?>
    </section>

    <!-- js -->
    <script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>"></script>
    <!-- inconos fontawesome -->
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>