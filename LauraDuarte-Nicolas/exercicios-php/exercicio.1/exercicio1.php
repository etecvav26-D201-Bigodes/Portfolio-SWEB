<!--
Data: 02/03/2026
Autor: Laura Duarte e Nicolas Saraiva
Objetivo: Criar um progama qual possa dizer se é verdadeiro ou falso que o número digitado está entre 100 e 200.

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Intervalo dos números (POST)</title>
</head>
<body>

<h1>Verificar número</h1>

<form action="calcula.php" method="post">
    <label>Digite o número:</label>
    <input type="number" name="num" required>
    <br><br>
    <input type="submit" value="Verificar">
</form>

</body>
</html>