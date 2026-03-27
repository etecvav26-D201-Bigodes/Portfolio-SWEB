<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];
$n6 = $_POST["n6"];
$n7 = $_POST["n7"];
$n8 = $_POST["n8"];

# criando um vetor com todos os números
$numeros = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];

# vetores vazios
$positivos = [];
$negativos = [];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Separação (POST)</h1>

<?php
for ($i = 0; $i < 8; $i++) {

    if ($numeros[$i] >= 0) {
        $positivos[] = $numeros[$i];
    } else {
        $negativos[] = $numeros[$i];
    }
}
?>

<p> Positivos: </p>
<?php
# percorre os positivos
foreach ($positivos as $p) {
    echo $p . " ";
}
?>
<p> Negativos: </p>
<?php
foreach ($negativos as $n) {
    echo $n . " ";
}

?>

<a href="exercicio7.php">Voltar</a>

</body>

</html>