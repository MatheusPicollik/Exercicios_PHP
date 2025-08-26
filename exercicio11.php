<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar palindromo</title>
</head>
<body>
    <form method="post" action="">
        <label for="verificar_palindromo">Digite o palavra palindroma</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_palindromo'])){
            $palavra = $_POST['palavra'];
            $length = strlen($palavra);
            $palavra_contrario = '';
            for($i=$length-1; $i>=0;$i--){
                $palavra_contrario .= $palavra[$i];
            }
            if($palavra_contrario == $palavra){
                echo "A palavra $palavra é um palindromo";
            } else{
                echo "A palavra $palavra não é um palindromo";
            }
        }
    }
    ?>
</body>
</html>