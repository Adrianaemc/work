<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Empresas </title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <header>
        <?php include 'templates/header.php'; ?>
        <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
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
        </header>
    <main>
        <div style="text-align: center; margin-top: 20px;">
            <h3>¡PUBLICÁ LAS BUSQUEDAS DE TU EMPRESA!</h3>
        </div>
        <form action="procesar_login_Empresa.php" method="POST">
            <h2 style="text-align: center;">Iniciar Sesión - Empresas</h2>
            <label for="email">Correo Electrónico:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contrasena" required>
            <input type="submit" value="Iniciar Sesión">
        </form>

        <a href="alta_empresa.php" style="text-align: center;">¿No tienes una cuenta? Regístrate aquí.</a>
        
        <!-- Enlace "Olvidó su contraseña" -->
        <a href="recuperacion_contraseña.php" style="text-align: center;">¿Olvidó su contraseña?</a>

        <!-- Botón "Soy Postulante" -->
        <a href="login_postulante.php" class="soy-postulante">Soy Postulante</a>
        
        
    </main>
    <footer><?php include 'templates/footer.php'; ?></footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
