<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar positivo, negativo ou zero</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_sinal">Digite o valor para verificar o sinal:</label>
        <input type="number" id="numero_sinal" name="numero_sinal" required>
        <button type="submit" name="verificar_sinal">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_sinal'])){
            $numero = $_POST['numero_sinal'];
            if($numero < 0){
                echo "O $numero é negativo";
            } else if ($numero > 0){
                echo "O $numero é positivo";
            } else{
                echo "O numero é 0";
            }
        }
    }
    ?>
</body>
</html>