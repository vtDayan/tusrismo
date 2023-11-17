<?php

// Verificar si se ha enviado el formulario de búsqueda de vuelos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar la información del formulario 
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    
    // Realizar la búsqueda de vuelos en la base de datos
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos - Página de Turismo</title>
</head>
<body>
    <h2>Vuelos</h2>

    <!-- Formulario de búsqueda de vuelos -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="origen">Origen:</label>
        <input type="text" name="origen" required>

        <label for="destino">Destino:</label>
        <input type="text" name="destino" required>

        <input type="submit" value="Buscar Vuelos">
    </form>

    <!-- Mostrar los resultados de la búsqueda de vuelos -->

    

</body>
</html>
