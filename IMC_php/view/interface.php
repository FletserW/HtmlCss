<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de IMC</title>
    </head>
    <body>
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
            <label>Classificação:
                <select name="filtro_classificacao">
                    <option value="baixo_peso">Baixo Peso</option>
                    <option value="normal">Normal</option>
                    <option value="sobrepeso">Sobrepeso</option>
                    <option value="obesidade">Obesidade</option>
                </select>
            </label>
            <input type="submit" value="Filtrar">
        </form>
    </body>
</html>
