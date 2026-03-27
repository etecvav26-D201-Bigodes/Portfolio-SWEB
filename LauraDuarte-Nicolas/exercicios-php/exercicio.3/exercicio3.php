<!--
Data: 27/03/2026
Autor: Laura Duarte Arruda dos Santos e Nicolas Saraiva Batista

Objetivo: o objetivo do exercício é que o programa leia dois números e um operador.
Depois calcular e mostrar o resultado.

Exercício 3 - Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.

-->

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form action="calcula.php" method="POST">
    
    <label>Número 1:</label>
    <input type="number" name="n1" required><br><br>

    <label>Número 2:</label>
    <input type="number" name="n2" required><br><br>

    <label>Operador:</label>

    <!-- criar lista de operadores selecionáveis -->
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input type="submit" value="Calcular">

</form>

</body>
</html>