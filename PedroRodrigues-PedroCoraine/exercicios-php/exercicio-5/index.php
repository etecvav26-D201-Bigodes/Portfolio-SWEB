<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Criar um programa que leia numeros inteiros e mostre a soma dos fatoriais.

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Somatório de Fatoriais</title>
</head>
<body>

    <h1>Somatório de Fatoriais</h1>

    <form action="calcula.php" method="POST">
        
        <label>Digite cinco números:</label>
        <br><br>

        <input type="number" name="n1" placeholder="Número 1" required>
        <br><br>

        <input type="number" name="n2" placeholder="Número 2" required>
        <br><br>

        <input type="number" name="n3" placeholder="Número 3" required>
        <br><br>

        <input type="number" name="n4" placeholder="Número 4" required>
        <br><br>

        <input type="number" name="n5" placeholder="Número 5" required>
        <br><br>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>