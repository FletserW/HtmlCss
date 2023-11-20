<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conecta ao banco de dados (substitua com suas credenciais)
    $db = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');

    // Recupera os dados do usuário com base no ID
    $query = $db->prepare("SELECT * FROM pessoas WHERE id = ?");
    $query->execute([$id]);
    $usuario = $query->fetch();

    if (!$usuario) {
        // Redireciona se o usuário não for encontrado
        header("Location: filtrar.php");
        exit();
    }
} else {
    // Redireciona se o ID não estiver definido
    header("Location: filtrar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div>
        <h1>Editar Usuário</h1>

        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <label>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required></label><br>
            <label>Idade: <input type="number" name="idade" value="<?php echo $usuario['idade']; ?>" required></label><br>
            <label>Peso (kg): <input type="number" name="peso" step="0.01" value="<?php echo $usuario['peso']; ?>" required></label><br>
            <label>Altura (m): <input type="number" name="altura" step="0.01" value="<?php echo $usuario['altura']; ?>" required></label><br>
            <input type="submit" value="Atualizar Dados">
        </form>
    </div>
</body>
</html>
