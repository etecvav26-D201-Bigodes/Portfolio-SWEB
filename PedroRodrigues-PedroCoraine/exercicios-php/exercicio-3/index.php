<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Criar um programa que le dois numeros e um operador, ele deve mostrar o resultado da conta.

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/"). O programa deve mostrar o resultado da operação.

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<form action="calcula.php" method="POST">
    
    <label for="num1">Primeiro número:</label>
    <input type="number" name="num1" id="num1" required><br><br>

    <label for="num2">Segundo número:</label>
    <input type="number" name="num2" id="num2" required><br><br>

    <label for="operador">Escolha a operação:</label>

    <select name="operador" id="operador">
        <option value="+">Soma (+)</option>
        <option value="-">Subtração (-)</option>
        <option value="*">Multiplicação (*)</option>
        <option value="/">Divisão (/)</option>
    </select><br><br>

    <input type="submit" value="Calcular Resultado">

</form>

</body>
</html>