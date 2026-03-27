<?php

$n = $_POST["n"];

$a = 0;
$b = 1;

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Sequência (POST)</h1>

<p> sequência: <p>
<?php

for ($i = 1; $i <= $n; $i++) {

    echo $a . " ";

    $calculo = $a + $b;
    $a = $b;
    $b = $calculo;
}

?>

<a href="exercicio6.php">Voltar</a>

</body>

</html>