<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <form method="POST" action="">
        <label for="calcular_IMC">Digite seu peso em kg:</label>
        <input type="number" name="peso" id="peso" required><br>
        <label for="calcular_IMC">Digite sua altura em metros(Exemplo: 1,70):</label>
        <input type="number" step="any" name="altura" id="altura" required><br>
        <button type="submit" name="calcular_IMC">Calcular</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_IMC'])){
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            $imc = $peso/($altura**2);
            $imc_arredondado = round($imc, 2);
            if($imc < 18.5){
                echo "Abaixo do peso, com um imc de $imc_arredondado";
            } else if($imc >= 18.5 and $imc <= 24.9){
                echo "Peso normal, com um imc de $imc_arredondado";
            } else if($imc >= 25 and $imc <= 29.9){
                echo "Acima do peso, com um imc de $imc_arredondado";
            } else if($imc >= 30 and $imc <= 34.9){
                echo "Obesidade classe 1, com um imc de $imc_arredondado";
            } else if($imc >= 35 and $imc <= 39.9){
                echo "Obesidade classe 2, com um imc de $imc_arredondado";
            } else {
                echo "Obesidade classe 3, com um imc de $imc_arredondado";
            }
        }
    }
    ?>
</body>
</html>