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
    if(isset($_POST['a_5'])) {
        $a_5 = $_POST['a_5'];

      // Verificar si el número es positivo, negativo o nulo
      if ($a_5 > 0) {
            echo "El número " .$a_5 . " es Positivo";
        } elseif ($a_5 < 0) {
            echo "El número " . $a_5 . " es Negativo";
        } else {
            echo "El número " . $a_5 . " es Nulo";
        }
    } 
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto6.html" >Probar de Vuelta?</a>
</div>

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
    .error {
        color: #f00;
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