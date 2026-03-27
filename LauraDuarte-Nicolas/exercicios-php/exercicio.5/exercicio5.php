<!--
Data: 27/03/2026
Autor: Laura Duarte Arruda dos Santos e Nicolas Saraiva Batista
Objetivo: Ler 5 números, calcular os fatoriais dos 5 números e somá-los.

Exercício 5 - Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Fatoriais</title>
</head>
<body>

<h2>Digite 5 números</h2>

<form action="calcula.php" method="POST">

    Número 1: <input type="number" name="n1" required><br><br>
    Número 2: <input type="number" name="n2" required><br><br>
    Número 3: <input type="number" name="n3" required><br><br>
    Número 4: <input type="number" name="n4" required><br><br>
    Número 5: <input type="number" name="n5" required><br><br>

    <input type="submit" value="Calcular">

</form>

</body>
</html>