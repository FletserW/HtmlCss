<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conecta ao banco de dados 
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');

    // Apaga o usuário com base no ID
    $query = $db->prepare("DELETE FROM pessoas WHERE id = ?");
    $query->execute([$id]);

    // Redireciona de volta para a página de filtro ou outra página apropriada
    header("Location: index.php");
    exit();
}
?>
