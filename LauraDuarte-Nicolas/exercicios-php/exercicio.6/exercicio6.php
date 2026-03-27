<!--
Data: 27/03/2026
Autor: Laura Duarte Arruda dos Santos e Nicolas Saraiva Batista
Objetivo: o objetivo é mostrar os primeiros números da sequência de fibonacci de acordo com 
o número digitado.

Exercício 6 - Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>

<h2>Digite um número</h2>

<form action="calcula.php" method="POST">

   <label> Número: </label>
    <input type="number" name="n" required><br><br>

    <input type="submit" value="Mostrar">

</form>

</body>
</html>