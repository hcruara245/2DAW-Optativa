<?php
// Declaración de variables
$nombreUsuario = "Visitante";
$fechaActual = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de ejemplo index.php</title>
</head>
<body>
    <h1>Bienvenido a mi sitio web</h1>
    
    <p>Hola, <strong><?php echo $nombreUsuario; ?></strong>.</p>
    <p>La fecha de hoy es: <?php echo $fechaActual; ?></p>

    <p>ESTE ES EL CAMBIO DE EJEMPLO</p>
</body>
</html>
