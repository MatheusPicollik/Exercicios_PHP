<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular tabuada</title>
</head>
<body>
    <form method="POST" action="">
        <label for="calcular_tabuada">Digite o valor para saber sua tabuada:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="calcular_tabuada">Calcular</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_tabuada'])){
            $numero = $_POST['numero_tabuada'];
            for($i = 1; $i <= 9; $i++){
                $valor = $numero * $i;
                echo "$numero x $i = $valor<br>\n";
            }
        }
    }
    ?>
</body>
</html>