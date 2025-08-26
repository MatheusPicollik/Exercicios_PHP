<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular fatorial</title>
</head>
<body>
    <form method="POST" action="">
        <label for="calcular_fatorial">Digite o número para saber seu fatorial:</label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required>
        <button type="submit" name="calcular_fatorial">Calcular</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_fatorial'])){
            $numero = $_POST['numero_fatorial'];
            $valor = $numero;
            for($i = 1; $i < $numero; $i++){
                $valor = $valor * ($numero - $i);
            }
            echo "O fatorial de $numero é $valor";
        }
    }
    ?>
</body>
</html>