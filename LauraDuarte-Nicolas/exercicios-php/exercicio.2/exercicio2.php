<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Conversão de temperatura (POST)</title>
</head>
<body>

<h1>Converter temperatura</h1>

<!-- enviar para o outro arquivo que calcula -->
<form action="calcula.php" method="post">

    <label> Temperatura: </label>
        <input type="number" name="temp"><br><br>

    <label> F ou C: </label>
     <input type="text" name="tipo" step="any"><br><br>

    <!-- o botão para enviar os dados -->
    <input type="submit" value="Converter">

</form>

</body>
</html>