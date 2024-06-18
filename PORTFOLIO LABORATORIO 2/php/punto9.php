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
    if(isset($_POST['a_8']) && isset($_POST['b_8'])) {
        $valor_a= $_POST['a_8'];
        $valor_b= $_POST['b_8'];

      // Verificar cuál número es mayor
      if ($valor_a < $valor_b) {
          echo "El menor  número es: " . $valor_a;
        } elseif ($valor_b < $valor_a) {
            echo "El menor número es: " . $valor_b;
        } else {
            echo "Ambos números son iguales.";
        }
    }else{
        echo "Los Numeros son iguales";
    }
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto9.html" >Probar de Vuelta?</a>
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