<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKPORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
        <img src="img/logo.png" alt="logo" class="logo">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Incio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/empresas.html">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/candidatos.html">Candidatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/novedades.html">Novedades</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <a href="login_empresa.php" class="btn btn-outline-primary me-3">Login empresas</a>
            <a href="login_postulante.php" class="btn btn-primary">¡Postúlate!</a>
        </div>
    </header>

    <main>
        <!-- Hero con imagen de fondo -->
        <section class="hero d-flex justify-content-center align-items-center text-white">
            <div class="text-center">
                <!-- Formulario de búsqueda -->
                <form action="motor_busqueda.php" method="GET" class="d-flex justify-content-center">
                    <input type="text" name="busqueda" class="form-control me-2" placeholder="Cargo o categoría">
                    <input type="text" name="lugar" class="form-control me-2" placeholder="Lugar">
                    <button type="submit" class="btn btn-primary">Buscar empleos</button>
                </form>
                <h1><strong>¡Ahora es el momento de cambiar!</strong></h1>
                <p> Encuentra el empleo de tus sueños, más de <strong>1000 ofertas disponibles para ti</strong></p>
            </div>
        </section>
        <section class="empresas">
            <h2 class="text-center mt-5">Empresas que están contratando</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-accenture.png" alt="Accenture" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-farmacity.png" alt="Farmacity" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-globant.png" alt="Globant" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-pepsico.png" alt="Pepsico" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-cocacola.png" alt="Coca cola" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-santander.png" alt="Santander" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-nike.png" alt="Nike" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-Randstad.png" alt="Rndstad Consultora" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-grupoG.png" alt="Grupo Gestion" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-starbucks.png" alt="Starbucks" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-adidas.png" alt="ADIDAS" class="empresa-logo">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="img/logo-amazon.png" alt="Grupo Agroempresa" class="empresa-logo">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center py-3 bg-light">
        <?php include 'templates/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>