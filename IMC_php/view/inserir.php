<link rel="stylesheet" type="text/css" href="../style/style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');

    // Coleta dados do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // Calcula o IMC
    $imc = $peso / ($altura * $altura);
    // Determina a classificação
    if($idade > 20 && $idade < 60) {
        if ($imc < 18.5) {
            $classificacao = "baixo_peso";
        } elseif ($imc >= 18.5 && $imc <= 24.99) {
            $classificacao = "normal";
        } elseif ($imc >= 25 && $imc <= 29.99) {
            $classificacao = "sobrepeso";
        } else {
            $classificacao = "obesidade";
        }
    }else{
        if($idade > 60) {
            if ($imc < 22) {
                $classificacao = "baixo_peso";
            } elseif ($imc >= 22 && $imc <= 27) {
                $classificacao = "normal";
            } elseif ($imc >= 27 && $imc <= 29.99) {
                $classificacao = "sobrepeso";
            } else {
                $classificacao = "obesidade";
            }
        }
    }
    // Insira os dados no banco de dados
    $query = $db->prepare("INSERT INTO pessoas (nome, idade, peso, altura, imc, classificacao) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$nome, $idade, $peso, $altura, $imc, $classificacao]);

    // Redireciona de volta à página principal
    header("Location: index.php");
}
?>
