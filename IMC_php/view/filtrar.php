<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados (substitua com suas credenciais)
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root@localhost', 'senha123');

    // Coleta os parâmetros de filtro
    $filtro_nome = $_POST["filtro_nome"];
    $filtro_classificacao = $_POST["filtro_classificacao"];

    // Constrói a consulta SQL com base nos parâmetros de filtro
    $sql = "SELECT * FROM pessoas WHERE 1=1";

    if (!empty($filtro_nome)) {
        $sql .= " AND nome LIKE '%$filtro_nome%'";
    }

    if (!empty($filtro_classificacao)) {
        $sql .= " AND classificacao = '$filtro_classificacao'";
    }

    // Execute a consulta
    $query = $db->query($sql);
    $resultados = $query->fetchAll();

    // Exibe os resultados
    echo "<h2>Resultados da pesquisa:</h2>";
    echo "<table>";
    echo "<tr><th>Nome</th><th>Idade</th><th>Peso</th><th>Altura</th><th>IMC</th><th>Classificação</th></tr>";

    foreach ($resultados as $resultado) {
        echo "<tr>";
        echo "<td>" . $resultado['nome'] . "</td>";
        echo "<td>" . $resultado['idade'] . "</td>";
        echo "<td>" . $resultado['peso'] . "</td>";
        echo "<td>" . $resultado['altura'] . "</td>";
        echo "<td>" . $resultado['imc'] . "</td>";
        echo "<td>" . $resultado['classificacao'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
