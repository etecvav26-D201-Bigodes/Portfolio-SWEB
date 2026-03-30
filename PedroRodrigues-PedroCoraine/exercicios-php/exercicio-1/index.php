<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Criar um programa que responda se um numero esta ou não entre 100 e 200

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>

    <h1>Digite um numero abaixo e descubra se ele esta entre 100 e 200</h1>

    <form action="calcula.php" method="post">
        <label for="numero">Digite seu número:</label><br>
        <input type="number" id="numero" name="numero" required>
        
        <br><br>
        
        <button type="submit">Verificar</button>
    </form>

</body>
</html>