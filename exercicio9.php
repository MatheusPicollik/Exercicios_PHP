<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar a soma entre os números</title>
</head>
<body>
    <form method="POST" action="">
        <label for="somar_numeros">Digite o primeiro valor:</label>
        <input type="number" id="numero_01" name="numero_01">
        <br>
        <label for="somar_numeros">Digite o segundo valor:</label>
        <input type="number" id="numero_02" name="numero_02">
        <br>
        <button type="submit" name="somar_numeros">Somar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['somar_numeros'])){
            $numero01 = $_POST['numero_01'];
            $numero02 = $_POST['numero_02'];
            $valor = 0;
            if ($numero01 > $numero02){
                for($i = $numero02 + 1; $i < $numero01; $i++){
                    $valor = $valor + $i;
                }
                echo "A soma dos valores entre $numero01 e $numero02 é de $valor";
            } else if($numero01 < $numero02){
                for($i = $numero01 + 1; $i < $numero02; $i++){
                    $valor = $valor + $i;
                }
                echo "A soma dos valores entre $numero02 e $numero01 é de $valor";
            } else{
                echo "Os números são iguais";
            }
        }
    }
    ?>
</body>
</html>