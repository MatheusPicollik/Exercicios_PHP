<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular número pela sequência Fibonacci</title>
</head>
<body>
    <form method="POST" action="">
        <label for="sequencia_fibonacci">Digite o valor para mostrar sequência pelo Fibonacci:</label>
        <input type="number" name="numero_fibonacci" id="numero_fibonacci">
        <button type="submit" name="sequencia_fibonacci">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['sequencia_fibonacci'])){
            $numero = $_POST['numero_fibonacci'];
            $i = 0;
            $b = 1;
            echo "Sequência de Fibonacci até $numero<br>\n";
            while ($i <= $numero) {
                echo "$i\n";
                $temp = $i + $b;
                $i = $b;
                $b = $temp;
            }
        }
    }
    ?>
</body>
</html>