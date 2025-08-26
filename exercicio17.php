<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar uma data</title>
</head>
<body>
    <form method="POST" action="">
        <label for="verificar_data">Digite a data de hoje:</label>
        <input type="date" name="data" id="data" required><br>
        <button type="submit" name="verificar_data">Verificar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_data'])){
            $data = ($_POST['data']);
            $separacao = explode('-', $data);
            $ano = $separacao[0];
            $mes = $separacao[1];
            $dia = $separacao[2]; 
            if($ano < 2023){
                echo "A data não é válida";
            } else if($ano == 2023){
                if($mes > 05){
                    echo "A data é válida";
                } else if($mes == 05){
                    if($dia >= 23){
                        echo "A data é válida";
                    } else {
                        echo "A data não é válida";
                    }
                } else {
                    echo "A data não é válida";
                }
            } else {
                echo "A data é válida";
            }
            echo "<br>Data valida é dia 23/05/2023";
        }
    }
    ?>
</body>
</html>