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
    if(isset($_POST['a_12']) && isset($_POST['b_12']) && isset($_POST['c_12'])) {
        $N_1 = $_POST['a_12'];
        $N_2 = $_POST['b_12'];
        $N_3 = $_POST['c_12'];
        
      // Verificar si todas las notas son números positivos menores a 10
      if (($N_1 > 0 && $N_1 < 10) && ($N_2 > 0 && $N_2 < 10) && ($N_3 > 0 && $N_3 < 10)) {
            // Calcular el promedio
            $promedio = ($N_1 + $N_2 + $N_3) / 3;

           // Mostrar el promedio de las notas
           echo "El promedio de las notas es: " . number_format($promedio, 2) . "<br>";

            // Encontrar y mostrar la nota mayor
            $notaMayor = max($N_1, $N_2, $N_3);
            echo "La nota mayor es: " . $notaMayor . "<br>";

            // Encontrar y mostrar la nota menor
            $notaMenor = min($N_1, $N_2, $N_3);
            echo "La nota menor es: " . $notaMenor . "<br>";
        } else {
            echo "Una de las notas no corresponde";
        }
    }
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto13.html" >Probar de Vuelta?</a>
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