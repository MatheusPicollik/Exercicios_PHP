<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar pares entre o número</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_pares">Digite o valor para verificar os pares:</label>
        <input type="number" name="numero_pares" id="numero_pares">
        <button type="submit" name="verificar_pares">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_pares'])){
            $numero = $_POST['numero_pares'];
            $quantidades_pares = 0;
            for($i = 1; $i < $numero; $i++){
                if($i % 2 === 0){
                    $quantidades_pares = $quantidades_pares + 1;
                    echo "O valor $i é um par<br>\n";
                }
            }
            echo "Existem no total $quantidades_pares de números pares entre 1 e $numero";
        }
    }
    ?>
</body>
</html>