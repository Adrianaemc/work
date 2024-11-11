<?php
require_once "bd.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["token"])) {
    $token = $_GET["token"];

    // Primero, busca el token en la tabla de usuarios
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE token = ?");
    $stmt->execute([$token]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si no se encuentra en la tabla de usuarios, busca en la tabla de empresas
    if (!$usuario) {
        $stmt = $conexion->prepare("SELECT * FROM empresas WHERE token = ?");
        $stmt->execute([$token]);
        $empresa = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Mostrar el formulario de restablecimiento de contraseña si se encuentra el token
    if ($usuario || $empresa) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Restablecer Contraseña</title>
            <link rel="stylesheet" href="styles/restablecer_contraseña.css">
        <body>
        <?php include 'templates/header.php'; ?>
            <div class="container">
                <h2>Restablecer Contraseña</h2>
                <form action="procesar_restablecer.php" method="post">
                    <label for="contrasena">Nueva Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <button type="submit">Restablecer Contraseña</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Enlace de recuperación inválido o expirado.";
    }
}
?>
