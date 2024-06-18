<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
</head>
<body>
<div class="container">
    <?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $resultado = $a + $b - $c + 100;

        echo "<div class='result'>El resultado de la operación ($a + $b - $c + 100) es: $resultado</div>";
    } else {
        echo "<div class='error'>No se han proporcionado todos los valores.</div>";
    }
    ?>


    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto1.html" >Probar de Vuelta?</a>
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


