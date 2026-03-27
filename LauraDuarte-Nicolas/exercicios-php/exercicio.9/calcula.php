<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Média (POST)</h1>

<?php

# criando o vetor
$valores = [$n1, $n2, $n3, $n4, $n5];

function media($v) {

    $soma = 0;

    foreach ($v as $num) {
        $soma = $soma + $num;
    }

    $quant = count($v);

    return $soma / $quant;
}

# chamando a função
$resultado = media($valores);
?>

<p> Média: <?php echo $resultado; ?>

<a href="exercicio9.php">Voltar</a>

</body>

</html>