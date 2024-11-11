<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Postulante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_login_postulantes.css">
</head>
<body>
    
<header class="d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
    <img src="img/logo.png" alt="logo" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light mx-auto">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
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
    <a href="login_empresa.php" class="btn-soy-empresa">Soy una empresa</a>
</header>
    <main>
        <div class="main-container">
            <div class="form-container">
                <form action="procesar_login_postulante.php" method="POST">
                    <h2 style="text-align: center; margin-bottom: 20px;">Iniciar Sesión - POSTULANTE</h2>
                    <label for="email">Correo Electrónico:</label>
                    <input type="text" id="email" name="email" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="contrasena" required>
                    <input type="submit" value="Iniciar Sesión">
                    <a href="recuperacion_contraseña.php" style="margin-top: 10px;">¿Olvidaste tu contraseña?</a>
                    <a href="alta_postulante.php">¿No tienes una cuenta? Regístrate aquí.</a>
                </form>
            </div>
            <img src="img/postulate.png" alt="Descripción de la imagen" class="imagen">
    </main>
    <footer><?php include 'templates/footer.php'; ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
