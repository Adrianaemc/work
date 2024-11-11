<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'C:/xampp/htdocs/sitioweb/bd.php'; 
    
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dni = $_POST["dni"];
    $localidad = $_POST["localidad"];
    $provincia = $_POST["provincia"];
    $pais = $_POST["pais"];
    $telefono = $_POST["telefono"];

    // Consultar si el correo electrónico ya existe en la base de datos
    $consulta = "SELECT COUNT(*) AS total FROM usuarios WHERE correo_electronico = :email";
    $statement = $conexion->prepare($consulta);
    $statement->bindParam(':email', $email);
    $statement->execute();
    $resultado = $statement->fetch(PDO::FETCH_ASSOC);
    if ($resultado['total'] > 0) {
        $mensaje_error = "El correo electrónico ya existe. Por favor, utiliza otro correo electrónico.";
    } else {
        // Inserción en la base de datos
        $query = "INSERT INTO usuarios (nombre, apellido, correo_electronico, contrasena, dni, localidad, provincia, pais, telefono) 
                  VALUES (:nombre, :apellido, :email, :password, :dni, :localidad, :provincia, :pais, :telefono)";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':apellido', $apellido);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':dni', $dni);
        $statement->bindParam(':localidad', $localidad);
        $statement->bindParam(':provincia', $provincia);
        $statement->bindParam(':pais', $pais);
        $statement->bindParam(':telefono', $telefono);
        
        if ($statement->execute()) {
            // Registro exitoso
            $registro_exitoso = true;
        } else {
            $mensaje_error = "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles/alta_candidato.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <div class="container">
        <h2>Regístrate y postulate gratis</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="repetir_contrasena">Repetir Contraseña:</label>
            <input type="password" id="repetir_contrasena" name="repetir_contrasena" required><br>

            <label for="dni">Documento:</label>
            <input type="text" id="dni" name="dni" required>

            <label for="localidad">Localidad:</label>
            <input type="text" id="localidad" name="localidad" required>

            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required>

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <input type="submit" value="Registrarse">
        </form>

        <?php if (isset($mensaje_error)): ?>
            <div class="error"><?php echo $mensaje_error; ?></div>
        <?php endif; ?>

        <?php if (isset($registro_exitoso) && $registro_exitoso): ?>
            <div class="success">Registro exitoso. Redirigiendo al inicio de sesión...</div>
            <meta http-equiv="refresh" content="5;url=login_postulante.php">
        <?php endif; ?>
    </div>
    <a href="login_empresa.php" class="btn-soy-empresa">Soy una empresa</a>

    <footer><?php include 'templates/footer.php'; ?></footer>
</body>
</html>