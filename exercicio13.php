<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graus para Fahrenheit</title>
</head>
<body>
    <form method="POST" action="">
        <label for="transformar_celsius">Celsius para Fahrenheit:</label>
        <input type="number" name="temp" id="temp" required>
        <button type="submit" name="transformar_celsius">Transformar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['transformar_celsius'])){
            $temp = $_POST['temp'];
            $fahren = ($temp * (9/5)) + 32;
            echo "A temperatura em Fahrenheit é de $fahren";
        }
    }
    ?>
</body>
</html>