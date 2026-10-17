
<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["Paterno"];
$edad = $_POST["edad"];
$color = $_POST["color"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos personales</title>
</head>
<body>
    <h1>Datos recibidos</h1>

    Nombre: <?php echo htmlspecialchars($nombre); ?><br>
    Apellidos: <?php echo htmlspecialchars($apellidos); ?><br>
    Edad: <?php echo htmlspecialchars($edad); ?><br>
    Color favorito:
    <span style="color: <?php echo htmlspecialchars($color); ?>">
        <?php echo htmlspecialchars($color); ?>
    </span>
</body>
</html>
