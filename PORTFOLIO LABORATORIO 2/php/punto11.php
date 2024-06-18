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
    if(isset($_POST['a_10']) && isset($_POST['b_10']) && isset($_POST['c_10'])) {
        $V_1 = $_POST['a_10'];
        $V_2 = $_POST['b_10'];
        $V_3 = $_POST['c_10'];
        
       // Calcular la suma
       $suma = $V_1 + $V_2 + $V_3;

       // Calcular la resta
       $resta = $V_1 - $V_2 - $V_3;

       // Calcular el producto
       $producto = $V_1 * $V_2 * $V_3;

       // Calcular el cociente (asegurando que no haya división por cero)
       if ($V_2 != 0 && $V_3 != 0) {
            $cociente = $V_1 / $V_2 / $V_3;
        } else {
            $cociente = "No se puede dividir por cero";
        }

        // Mostrar los resultados
        echo "La suma de los números es: " . $suma . "<br>";
        echo "La resta de los números es: " . $resta . "<br>";
        echo "El producto de los números es: " . $producto . "<br>";
        echo "El cociente de los números es: " . $cociente . "<br>";
    }    
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto11.html" >Probar de Vuelta?</a>
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