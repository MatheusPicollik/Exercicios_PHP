<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de vogais</title>
</head>
<body>
    <form method="post" action="">
        <label for="verificar_vogais">Digite uma palavra</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit" name="verificar_vogais">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_vogais'])){
            $palavra = $_POST['palavra'];
            $length = strlen($palavra);
            $quantidade_vogal = 0;
            for($i = 0; $i < $length; $i++){
                if(in_array($palavra[$i], ['a', 'e', 'i', 'o', 'u'])){
                    $quantidade_vogal = $quantidade_vogal + 1;
                }
            }
            echo "O número de vogais da palavra $palavra é de $quantidade_vogal";
        }
    }
    ?>
</body>
</html>