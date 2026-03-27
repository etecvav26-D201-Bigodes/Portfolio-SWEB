<!--
Data: 27/03/2026
Autor: Laura Duarte Arruda dos Santos e Nicolas saraiva Batista

Objetivo: Criar uma função que pegue os números de uma lista e faça a média deles.

Exercício 9 - Crie uma função:
function media($v)
Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Média</title>
</head>
<body>

<h2>Digite 5 números</h2>

<form action="calcula.php" method="POST">

<label> Digite o 1 número </label>
    <input type="number" step="any" name="n1" required><br><br>
<label> Digite o 2 número </label>
    <input type="number" step="any" name="n2" required><br><br>
<label> Digite o 3 número </label>  
    <input type="number" step="any" name="n3" required><br><br>
<label> Digite o 4 número </label>
    <input type="number" step="any" name="n4" required><br><br>
<label> Digite o 5 número </label>
    <input type="number" step="any" name="n5" required><br><br>

    <input type="submit" value="Calcular Média">

</form>

</body>
</html>