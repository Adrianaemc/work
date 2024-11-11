<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="styles/recuperar_contraseña.css">
</head>
<body>
    <header>
        <?php include 'templates/header.php'; ?>
    </header>
    <main>
        <div class="container">
            <h2>¿Olvidaste tu contraseña? </h2>
            
            <form action="procesar_recuperacion.php" method="post">
                <label for="email">Ingresá tu email y te enviaremos los pasos para elegir una nueva:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>

