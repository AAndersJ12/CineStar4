<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styleCineStar.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>CineStar</title>
</head>
<body>
<main> 
    <header>
        <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img id="logo-navbar" src="./assets/media/img/Logo-CineStar-Sinfondo.png" alt="imagen">
            </a>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carteleras">Carteleras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sobre-Nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <label for="toggle" id="iconito"><i class="fa-solid fa-sun"></i></label>
                    <input type="checkbox" id="toggle" class="nav-link">
                </li>
                </ul>
            </div>
            </div>
        </nav>
        </div> 
    </header>
    <section class="banner">
    </section>
    <section id="sectionCarrousel">
    <div class="container-slider">
        <h2>Ultimos Estrenos</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/media/billboards/Intensamente-cartelera.jpg" class="d-block w-100" alt="..." id="img-slider">
            </div>
            <div class="carousel-item">
                <img src="./assets/media/billboards/mi-villano-favorito-4.jpg" class="d-block w-100" alt="..." id="img-slider">
            </div>
            <div class="carousel-item">
                <img src="./assets/media/billboards/Kunfu-panda-4-cartelera.jpg" class="d-block w-100" alt="..." id="img-slider">
            </div>
            <div class="carousel-item">
                <img src="./assets/media/billboards/Bad-boys-cartelera.jpg" class="d-block w-100" alt="..." id="img-slider">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>


    <!-- Modal iniciar sesion-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inicia Sesión en CineStar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="formSesion">
            <div class="modal-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="usuarioinicio" id="usuarioinicio" placeholder="nombre@ejemplo.com">
                <label for="usuarioinicio" class="form-label">Usuario/Correo/Cédula</label>
            </div>
            <div class="mb-3">
                <div class="form-floating mb-3">
                <input type="password" class="form-control" name="contrainicio" id="contrainicio" placeholder="Password">
                <label for="contrainicio" class="form-label">Contraseña</label>
            </div>
            <span id="error"></span>

            </div>
            </div>
            <div class="modal-footer">
                <div id="iniciobtn" class="col-12">
                <div class="d-grid">
                <button id="iniciosesionbtn" class="btn bsb-btn-2xl btn-primary " type="submit">Iniciar sesión</button>
                </div>
                </div>
            </div>
        </form>
        <hr>
        <p class="pblack bold littleText text-center">¿No tienes cuenta? <a class="links" href="Registro.html">¡Regístrate aquí!</a></p>
        </div>
    </div>
    </div>
</main>   
    <!-- Modal iniciar sesion -->
    <footer class="text-center text-lg-start" style="background-color: rgb(36, 36, 36); color: aliceblue;">
    <div class="container p-4">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 align="center" class="text-uppercase">Página Web: proyecto CineStar</h5>
        <p align="justify">
            Página hecha en el 3er Semestre de Informática seccion B 2024.
        </p>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0" align="center">
            <img src="./assets/media/img/Fe y alegria.jpeg" width="200px" alt="...">
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 align="center" class="text-uppercase">Programadores</h5>
        <p align="justify">
            Los programadores de esta página web fueron los alumnos Anderson Abreu y Diego Flores
        </p>
        </div>
    </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright: Anderson Abreu & Diego Flores
    </div>
    </footer>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/inicioSesion.js"></script>
    <script src="./assets/js/Modo-claro.js"></script>  
</body>
</html>