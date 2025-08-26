<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar numero amigo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_amigo">Digite o primeiro valor:</label>
        <input type="number" id="numero_amigo_01" name="numero_amigo_01">
        <br>
        <label for="verificar_amigo">Digite o segundo valor:</label>
        <input type="number" id="numero_amigo_02" name="numero_amigo_02">
        <br>
        <button type="submit" name="verificar_amigo">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_amigo'])){
            $numero01 = $_POST['numero_amigo_01'];
            $numero02 = $_POST['numero_amigo_02'];
            $valor01 = 0;
            $valor02 = 0;
            for($i = 1; $i < $numero01; $i++){
                if($numero01 % $i === 0){
                    $valor01 = $valor01 + $i;
                }
            }
            for($a = 1; $a < $numero02; $a++){
                if($numero02 % $a === 0){
                    $valor02 = $valor02 + $a;
                }
            }
            if($valor02 == $numero01 && $valor01 == $numero02){
                echo "Os valores $numero01 e $numero02 são números amigos";
            } else {
                echo "Não são valores amigos";
            }
        }
    }
    ?>
</body>
</html>