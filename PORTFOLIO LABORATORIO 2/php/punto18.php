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
    if(isset($_POST['a_18'])) {
        $NUMERO1= $_POST['a_18'];
        $suma = 0;
       
        if ($NUMERO1 >= 1) {
            // Calcular la sumatoria de los números anteriores
            for ($i = 1; $i < $NUMERO1; $i++) {
                $suma += $i;
            }
            echo "La sumatoria de los números anteriores a " . $NUMERO1 . " es: ".$suma;
        } else {
            echo "Por favor, ingrese un número entero positivo mayor o igual a 1";
        }
    }
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto18.html" >Probar de Vuelta?</a>
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