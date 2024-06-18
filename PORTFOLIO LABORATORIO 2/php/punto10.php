<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<div class="container">
    <?php

        // Definir las tarifas
        $tarifa_inicial = 9.50;
        $tarifa_adicional = 1.10;
        $costo_total = 0.0;

        if(isset($_POST['a_9'])) {
            $min= $_POST['a_9'];
        
            // Calcular el costo de la llamada
        if ($min <= 3) {
            $costo_total = $min * $tarifa_inicial;
        } else {
            $costo_total = (3 * $tarifa_inicial) + (($min - 3) * $tarifa_adicional);
        }
    }
    // Mostrar el costo de la llamada
    echo "El costo de la llamada de " . $min . " minutos es: $" . number_format($costo_total, 2);
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto10.html" >Probar de Vuelta?</a>
</div>
</body>
</html>



<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .result {
        color: #333;
        font-size: 18px;
        margin-bottom: 20px;
    }
    a {
        display: block;
        text-align: center;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        margin-top: 20px;
    }
</style>