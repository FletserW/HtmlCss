<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de IMC</title>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
    </head>
    <body>
        <div>
            <h1>Calculadora de IMC</h1>

            <form action="inserir.php" method="post">
                <label>Nome: <input type="text" name="nome" required></label><br>
                <label>Idade: <input type="number" name="idade" required></label><br>
                <label>Peso (kg): <input type="number" name="peso" step="0.01" required></label><br>
                <label>Altura (m): <input type="number" name="altura" step="0.01" required></label><br>
                <input type="submit" value="Calcular IMC">
            </form>

            <h2>Filtrar Pessoas</h2>
            <form action="filtrar.php" method="post">
                <label>Nome: <input type="text" name="filtro_nome"></label>
                <input type="submit" value="Filtrar">
            </form>
        </div>
    </body>
</html>
