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
    if(isset($_POST['a_17']) && isset($_POST['b_17']) ) {
        $NUM_1= $_POST['a_17'];
        $NUM_2 = $_POST['b_17'];

        if ($NUM_1 <= $NUM_2) {
            for ($i = $NUM_1; $i <= $NUM_2; $i++) {
                echo "<span class='numero'>" . $i . "</span>";
            }
        } else {
            echo "El primer número debe ser menor o igual al segundo número.";
        }
    }
    
    ?>
    <a href="../ejercicios.html" >Volver al MENU principal</a>
    <a href="punto17.html" >Probar de Vuelta?</a>
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
    .numero {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .numero:hover {
            background-color: #e0e0e0;
            transform: scale(1.1);
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