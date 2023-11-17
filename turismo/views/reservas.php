<?php


// Verificar si se ha enviado el formulario de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar la información del formulario 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $destino = $_POST["destino"];
    
    // Guardar los datos en una base de datos 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Página de Turismo</title>
</head>
<body>
    <h2>Reservas</h2>

    <!-- Formulario de reserva -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>

        <label for="destino">Destino:</label>
        <input type="text" name="destino" required>

        <input type="submit" value="Reservar">
    </form>

    

</body>
</html>
