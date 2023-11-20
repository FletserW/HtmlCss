<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conecta ao banco de dados
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');

    // Recupera os dados do usuário com base no ID
    $query = $db->prepare("SELECT * FROM pessoas WHERE id = ?");
    $query->execute([$id]);
    $usuario = $query->fetch();
    
    header("Location: editar_formulario.php?id=$id");
    exit();
}
?>
