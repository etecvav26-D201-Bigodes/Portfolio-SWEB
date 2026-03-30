<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Criar um programa que leia numeros inteiros e mostre a soma dos fatoriais.

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>

    <h1>Série de Fibonacci</h1>

    <form action="calcula.php" method="POST">
        
        <label for="n">Informe a quantidade de termos:</label>
        <input type="number" id="n" name="n" min="1" required>

        <br><br>

        <button type="submit">Mostrar sequência</button>

    </form>

</body>
</html>