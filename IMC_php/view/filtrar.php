<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados 
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');

    // Coleta os parâmetros de filtro
    $filtro_nome = $_POST["filtro_nome"];

    // Constrói a consulta SQL com base nos parâmetros de filtro
    $sql = "SELECT * FROM pessoas WHERE 1=1";

    if (!empty($filtro_nome)) {
        $sql .= " AND nome LIKE '%$filtro_nome%'";
    }

    // Execute a consulta
    $query = $db->query($sql);
    $resultados = $query->fetchAll();

    // Exibe os resultados
    echo "<div>";
    echo "<h2>Resultados da pesquisa:</h2>";
    echo "<table>";
    echo "<tr><th>Nome</th><th>Idade</th><th>Peso</th><th>Altura</th><th>IMC</th><th>Classificação</th><th>Opções</th></tr>";

    foreach ($resultados as $resultado) {
        echo "<tr>";
        echo "<td>" . $resultado['nome'] . "</td>";
        echo "<td>" . $resultado['idade'] . "</td>";
        echo "<td>" . $resultado['peso'] . "</td>";
        echo "<td>" . $resultado['altura'] . "</td>";
        echo "<td>" . $resultado['imc'] . "</td>";
        echo "<td>" . $resultado['classificacao'] . "</td>";
        echo "<td><a href='editar.php?id=" . $resultado['id'] . "'><span class='material-symbols-outlined'>edit_note</span></a> <a href='apagar.php?id=" . $resultado['id'] . "'><span class='material-symbols-outlined'>
        delete
        </span></a></td>";
    echo "</tr>";

        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}
?>
