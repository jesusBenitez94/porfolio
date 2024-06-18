<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio General de 20 Números</title>
</head>
<body>
    <div class="numeros-container">
    <div class="container">
        <h1>Promedio General de 20 Números</h1>
        <div class="number-list">
            <?php
                // Crear un array con los números del 1 al 100
                $numeros1 = range(1, 20);

                // Barajar el array para mezclar los números
                shuffle($numeros1);

                // Calcular la suma de todos los números en la lista
                $suma = array_sum($numeros1);


                // Calcular el promedio dividiendo la suma por la cantidad de números
                $cantidad_numeros = count($numeros1);
                $promedio = $suma / $cantidad_numeros;


                // Mostrar los números barajados
                foreach ($numeros1 as $numero) {
                    echo "<div class='number'>$numero</div>";
                }

                echo "<p>La suma de los números es: " . $suma . "</p>";
                echo "<p>El promedio general de los números es: " . $promedio . "</p>";
            ?>
        </div>
        <button onclick="location.reload();">Generar Orden Aleatorio</button>
        <a href="../index.html" >Volver al MENU principal</a>

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