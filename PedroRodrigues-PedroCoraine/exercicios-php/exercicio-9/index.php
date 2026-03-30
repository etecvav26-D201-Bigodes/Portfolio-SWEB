<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Receber uma lista e retornar a média aritmética

Exercício 9 - Média Aritmética com Função
Crie uma função: function media($v), Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média</title>
</head>
<body>

    <h2>Digite os números (quantos quiser)</h2>

    <form action="calcula.php" method="POST">

        <input type="number" step="any" name="n[]" placeholder="Número 1" required><br><br>
        <input type="number" step="any" name="n[]" placeholder="Número 2" required><br><br>
        <input type="number" step="any" name="n[]" placeholder="Número 3"><br><br>
        <input type="number" step="any" name="n[]" placeholder="Número 4"><br><br>
        <input type="number" step="any" name="n[]" placeholder="Número 5"><br><br>
        <input type="number" step="any" name="n[]" placeholder="Número 6"><br><br>

        <button type="submit">Calcular Média</button>

    </form>

</body>
</html>