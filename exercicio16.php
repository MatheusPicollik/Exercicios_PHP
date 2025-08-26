<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode votar ou não</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_voto">Digite seu nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="verificar_voto">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required><br>
        <button type="submit" name="verificar_voto">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_voto'])){
            $idade = $_POST['idade'];
            $nome = $_POST['nome'];
            if($idade < 16){
                echo "$nome, você ainda não pode votar";
            } else if($idade >= 18 and $idade < 70){
                echo "$nome, você é obrigado a votar";
            } else {
                echo "$nome, seu voto é opcional";
            }
        }
    }
    ?>
</body>
</html>