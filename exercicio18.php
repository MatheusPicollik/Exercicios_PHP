<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar valores</title>
</head>
<body>
    <form method="POST" action="">
        <label for="validar_valores">Digite o primeiro número:</label>
        <input type="number" name="n1" id="n1" required><br>
        <label for="validar_valores">Digite o segundo número:</label>
        <input type="number" name="n2" id="n2" required><br>
        <label for="validar_valores">Digite o terceiro número:</label>
        <input type="number" name="n3" id="n3" required><br>
        <button type="submit" name="validar_valores">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['validar_valores'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            if($n1 > $n2 and $n1 > $n3){
                echo "O $n1 é maior que $n2 e $n3";
            } else if($n2 > $n1 and $n2 > $n3){
                echo "O $n2 é maior que $n1 e $n3";
            } else {
                echo "O $n3 é maior que $n2 e $n1";
            }
        }
    }
    ?>
</body>
</html>