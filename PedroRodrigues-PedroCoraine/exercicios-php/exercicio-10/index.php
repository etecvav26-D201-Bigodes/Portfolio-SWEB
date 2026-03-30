<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: 

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto. Um ano é bissexto se: É múltiplo de 400 ou se é múltiplo de 4 e não é múltiplo de 100
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ano Bissexto</title>
</head>
<body>

    <h2>Verificar Ano Bissexto</h2>

    <form action="calcula.php" method="POST">

        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>

        <br><br>

        <button type="submit">Verificar</button>

    </form>

</body>
</html>