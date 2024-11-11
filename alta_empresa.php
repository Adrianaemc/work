<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'C:/xampp/htdocs/sitioweb/bd.php'; 
    // Obtener los datos del formulario
    $nombre_empresa = $_POST["nombre_empresa"];
    $cuit = $_POST["cuit"];
    $contrasena = $_POST["contrasena"];
    $repetir_contrasena = $_POST["repetir_contrasena"];
    $correo_electronico = $_POST["correo_electronico"];
    $domicilio = $_POST["domicilio"];
    $pais = $_POST["pais"];
    $telefono = $_POST["telefono"];

    // Verifica si las contraseñas coinciden
    if ($contrasena !== $repetir_contrasena) {
        $mensaje_error = "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    } else {
        // Verificar si el correo electrónico ya existe en la base de datos
        $stmt = $conexion->prepare("SELECT correo_electronico FROM empresas WHERE correo_electronico = ?");
        $stmt->execute([$correo_electronico]);
        if ($stmt->fetchColumn()) {
            $mensaje_error = "El correo electrónico ya está registrado. Por favor, utiliza otro correo electrónico.";
        } else {
            // Inserción en la base de datos
            $query = "INSERT INTO empresas (nombre_empresa, cuit, contrasena, correo_electronico, domicilio, pais, telefono) VALUES (:nombre_empresa, :cuit, :contrasena, :correo, :domicilio, :pais, :telefono)";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':nombre_empresa', $nombre_empresa);
            $statement->bindParam(':cuit', $cuit);
            $statement->bindParam(':contrasena', $contrasena);
            $statement->bindParam(':correo', $correo_electronico);
            $statement->bindParam(':domicilio', $domicilio);
            $statement->bindParam(':pais', $pais);
            $statement->bindParam(':telefono', $telefono);
            
            if ($statement->execute()) {
                // Registro exitoso
                $registro_exitoso = true;
            } else {
                $mensaje_error = "Error al registrar la empresa. Por favor, inténtalo de nuevo.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empresa</title>
    <link rel="stylesheet" href="styles/alta_candidato.css">
</head>
<body>
    <div class="btn-container">
        <a href="login_postulante.php" class="btn-soy-empresa">Soy postulante</a>
    </div>

    <div class="container">
        <h2>Registra tu empresa y publicá tus ofertas laborales gratis</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre_empresa">Nombre de la Empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" required><br>

            <label for="cuit">CUIT:</label>
            <input type="text" id="cuit" name="cuit" required><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>

            <label for="repetir_contrasena">Repetir Contraseña:</label>
            <input type="password" id="repetir_contrasena" name="repetir_contrasena" required><br>

            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico" required><br>

            <label for="domicilio">Domicilio:</label>
            <input type="text" id="domicilio" name="domicilio" required><br>

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br>

            <input type="submit" value="Registrarse">
        </form>

        <?php if (isset($mensaje_error)): ?>
            <div class="error"><?php echo $mensaje_error; ?></div>
        <?php endif; ?>

        <?php if (isset($registro_exitoso) && $registro_exitoso): ?>
            <div class="success">Registro exitoso. Redirigiendo al inicio de sesión...</div>
            <meta http-equiv="refresh" content="5;url=login_empresa.php">
        <?php endif; ?>
    </div>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
