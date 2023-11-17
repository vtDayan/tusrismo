<?php


// Verificar si se ha enviado el formulario de reseñas
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar la información del formulario 
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];
    
    // Guardar la reseña en la base de datos
    // Aquí deberías utilizar consultas preparadas y validar/filtrar datos.
    
  
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas - Página de Turismo</title>
</head>
<body>
    <h2>Reseñas</h2>

    <!-- Formulario de reseñas -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="comentario">Comentario:</label>
        <textarea name="comentario" rows="4" cols="50" required></textarea>

        <input type="submit" value="Enviar Reseña">
    </form>

    <!-- Mostrar las reseñas almacenadas en la base de datos -->

    

</body>
</html>
