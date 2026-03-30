<!--
Data: 30/03/2026
Autor: Pedro Henrique Nascimento Rodrigues
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>

    <h1>Conversão de Temperatura</h1>

    <form action="calcula.php" method="post">
        
        <label for="temp">Informe a temperatura:</label>
        <input type="number" id="temp" name="temp" step="any" required>
        
        <br><br>
        
        <label for="tipo">Escolha a unidade de origem:</label>
        <select id="tipo" name="tipo" required>
            <option value="">Selecione</option>
            <option value="C">Celsius (°C)</option>
            <option value="F">Fahrenheit (°F)</option>
        </select>
        
        <br><br>
        
        <button type="submit">Converter</button>
    </form>

</body>
</html>