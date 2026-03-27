<?php

$n = $_POST["n"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Soma (POST)</h1>

<?php

# função soma
function soma($n) {

    $total = 0;

    for ($i = 0; $i <= $n; $i++) {
        $total = $total + $i;
    }

    return $total;
}

# chamando a função
$resultado = soma($n);
?>
<p> <?php echo $resultado; ?> </p>

<a href="exercicio8.php">Voltar</a>

</body>

</html>