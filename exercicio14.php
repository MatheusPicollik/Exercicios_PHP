<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto</title>
</head>
<body>
    <form method="POST" action="">
        <label for="ano_bissexto">Digite um ano:</label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit" name="ano_bissexto">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['ano_bissexto'])){
            $ano = $_POST['ano'];
            if($ano[2] == 0 and $ano[3] == 0){
                if($ano % 400 === 0){
                    echo "O ano de $ano é um ano bissexto";
                } else {
                    echo "O ano de $ano não é um ano bissexto";
                }
            } else if($ano % 4 === 0){
                echo "O ano de $ano é um ano bissexto";
            } else {
                echo "O ano de $ano não é um ano bissexto";
            }
        }
    }
    ?>
</body>
</html>