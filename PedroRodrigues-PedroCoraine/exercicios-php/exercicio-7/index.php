<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo: Criar um programa que leia numeros inteiros e mostre a soma dos fatoriais.

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores: Um vetor com números positivos e um vetor com números negativos.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>

    <h1>Positivos e Negativos</h1>

    <form action="calcula.php" method="POST">
        
        <label>Digite 8 números inteiros:</label>
        <br><br>

        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "Número $i: <input type='number' name='n[]' required><br><br>";
        }
        ?>

        <button type="submit">Separar</button>

    </form>

</body>
</html>