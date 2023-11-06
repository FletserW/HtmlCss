<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados (substitua com suas credenciais)
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root@localhost', 'senha123');

    // Coleta dados do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // Calcula o IMC
    $imc = $peso / ($altura * $altura);

    // Determina a classificação
    if ($imc < 22) {
        $classificacao = "baixo_peso";
    } elseif ($imc >= 22 && $imc <= 27) {
        $classificacao = "normal";
    } elseif ($imc >= 27 && $imc <= 29.99) {
        $classificacao = "sobrepeso";
    } else {
        $classificacao = "obesidade";
    }

    // Insira os dados no banco de dados
    $query = $db->prepare("INSERT INTO pessoas (nome, idade, peso, altura, imc, classificacao) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$nome, $idade, $peso, $altura, $imc, $classificacao]);

    // Redireciona de volta à página principal
    header("Location: index.php");
}
?>
