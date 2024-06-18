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
    
    if(isset($_POST['a_6']) && isset($_POST['b_6']) && isset($_POST['c_6']) ) {
        $lado1= $_POST['a_6'];
        $lado2 = $_POST['b_6'];
        $lado3 = $_POST['c_6'];


      // Verificar si los números pueden formar un triángulo
        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            // Determinar el tipo de triángulo
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "Los números forman un triángulo equilátero.";
                echo "<br>";
                echo "<img src='equilatero.JPG' alt='Triángulo Equilátero' />";
                
                
                
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "Los números forman un triángulo isósceles.";
                echo "<br>";
                echo "<img src='isoceles.jpg' alt='' />";
            } else {
                echo "Los números forman un triángulo escaleno.";
                echo "<br>";
                echo "<img src='escaleno.jpg' alt='' />";
            }
        } else {
            echo "Los números no pueden formar un triángulo.";
            echo "<br>";
            echo "<img src='triste.jpg' alt='' />";
        }
        
    }
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto7.html" >Probar de Vuelta?</a>
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