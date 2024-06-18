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
    if(isset($_POST['a_20'])) {
        $numero_20 = $_POST['a_20'];

        $numeros12 = range(1, $numero_20);

        // Barajar el array para mezclar los números
        shuffle($numeros12);

        // Calcular la suma de todos los números en la lista
        $suma23 = array_sum($numeros12);

        // Mostrar los números barajados
        foreach ($numeros12 as $numero20) {
            echo "<div class='number'>$numero20</div>";
        }
        echo "<p>La suma de los números es: " . $suma23 . "</p>";
    }
    
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto20.html" >Probar de Vuelta?</a>
</div>
</body>
</html>



<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .number-list {
        margin: 20px 0;
    }
    .number {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin: 2px;
        line-height: 30px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #00563B;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color:#568203;
    }
    a {
        
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #33006F;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;

    }
    a:hover,
    a:focus {
        background: #720e9e;
        cursor: pointer;
        outline: none;
    }
  
</style>