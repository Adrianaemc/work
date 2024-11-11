<?php
require_once "bd.php";

// Iniciar sesión si aún no está iniciada
session_start();

// Supongamos que el ID de la empresa está almacenado en $_SESSION['empresa']['id_empresa']
$id_empresa = $_SESSION['empresa']['id_empresa'];

// Recuperar los datos de la empresa de la base de datos
$sql = "SELECT nombre_empresa, cuit, telefono, descripcion, foto_perfil FROM empresas WHERE id_empresa = :id";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':id', $id_empresa);
$stmt->execute();

// Obtener los datos de la empresa
$empresa = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil</title>
    <link rel="stylesheet" href="styles/mod_datos_empresa.css">
</head>
<body>
    <div class="container">
        <h1>Modificar Perfil de la Empresa</h1>
        <form action="procesar_mod_datos_empresa.php" method="POST" enctype="multipart/form-data">
            <label for="nombre_empresa">Nombre de la Empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" value="<?php echo htmlspecialchars($empresa['nombre_empresa']); ?>">

            <label for="cuit_empresa">CUIT:</label>
            <input type="text" id="cuit_empresa" name="cuit_empresa" value="<?php echo htmlspecialchars($empresa['cuit']); ?>" readonly>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($empresa['telefono']); ?>">

            <label for="descripcion">Descripción de la Empresa:</label>
            <textarea id="descripcion" name="descripcion" rows="4"><?php echo htmlspecialchars($empresa['descripcion']); ?></textarea>

            <label for="foto_perfil">Foto de Perfil:</label>
            <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*">

            <input type="submit" value="Guardar Cambios">
        </form>   
    </div>
    
</body>

</html>
