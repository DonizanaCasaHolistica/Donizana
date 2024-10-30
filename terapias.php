<?php
// Incluye la conexión a la base de datos
include 'conexion.php'; // Asegúrate de que el archivo conexion.php esté en el mismo directorio
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Chango&family=Concert+One&family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo-terapias.css">
    <title> Nuestras Terapias </title>
</head>
<body>
    <div class="terapias">
        <h1 class="titulo"> Nuestras Terapias </h1>
        <div class="contenedor-imagenes-terapias">
            <?php foreach ($terapias as $terapia): ?>
                <div class="img-terapias">
                    <img src="<?php echo htmlspecialchars($terapia['imagen']); ?>" alt="<?php echo htmlspecialchars($terapia['nombre']); ?>">
                    <h2 class="nombre-terapia"><?php echo htmlspecialchars($terapia['nombre']); ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
