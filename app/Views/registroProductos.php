<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de productos</title>
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
        <div class="container mt-5 fuente">
            <div class="row">
                <div class="col-6">
                    <form action="<?= site_url('/productos/registros/nuevo') ?>" method="POST">
                        <h2 style="text-align:center">Registro de productos</h2>
                        <br>
                        <div class="mb-3">
                            <label for="producto" class="form-label">Producto:</label>
                            <input type="text" class="form-control" id="producto" aria-describedby="producto" name="producto">
                        </div>
                        <div class="mb-3">
                            <label for="fotografia" class="form-label">Fotografia:</label>
                            <input type="text" class="form-control" id="fotografia" aria-describedby="fotografia" name="fotografia">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio Unidad:</label>
                            <input type="text" class="form-control" id="precio" aria-describedby="precio" name="precio">
                        </div>
                        <div class="mb-3">
                            <label for="floatingTexttarea">Descripcion</label>
                            <textarea type="text" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" name="descripcion"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de animal:</label>
                            <select class="form-select" name="" id="tipo" name="tipo">
                                <option value="">Perro</option>
                                <option value="">Gatos</option>
                                <option value="">Aves</option>
                                <option value="">Peces</option>
                                <option value="">Caballos</option>
                                <option value="">Reptiles</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
                <div class="col-6 align-self-center">
                    <img class="d-block w-100" src="<?= base_url('public/img/perritos6.jpg') ?>" alt="dog">
                </div>
            </div>
        </div>
    </main>
    <section>
        <?php if (session('mensaje')) : ?>
            <div class="modal fade" id="modalRta" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header fondo">
                            <h5 class="modal-title">Casa Hogar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5><?= session('mensaje')?></h5>
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