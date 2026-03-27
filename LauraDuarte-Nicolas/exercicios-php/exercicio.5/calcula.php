<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];

$soma = 0;

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Soma dos Fatoriais (POST)</h1>

<?php

#criar função para calcular fatorial 
function fatorial($num) {
    $fat = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fat = $fat * $i;
    }
#devolver e gerar o resultado
    return $fat;
}

$soma = fatorial($n1) + fatorial($n2) + fatorial($n3) + fatorial($n4) + fatorial($n5);
?>

<p> A soma dos fatoriais é <?php echo $soma; ?> </p>

<a href="exercicio5.php">Voltar</a>

</body>

</html>