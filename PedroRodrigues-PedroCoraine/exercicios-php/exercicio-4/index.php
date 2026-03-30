<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues 2D
Objetivo: Criar um triangulo numerico

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Linhas de Números</title>
</head>
<body>

<h2>Gerador de Linhas Numéricas</h2>

<form action="calcula.php" method="POST">

    <label for="numero">Digite um número:</label>
    <input type="number" name="num" id="numero" required><br><br>

    <input type="submit" value="Mostrar Linhas">

</form>

</body>
</html>
