<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir divisores de um número</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_divisores">Digite um número para verificar seu divisor:</label>
        <input type="number" name="numero_divisor" id="numero_divisor" required>
        <button type="submit" name="verificar_divisor">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_divisor'])){
            $numero = $_POST['numero_divisor'];
            for($i = 1; $i < $numero; $i++){
                if($numero % $i === 0){
                    echo "O número $i é divisor de $numero<br>\n";
                }
            }
        }
    }
    ?>
</body>
</html>