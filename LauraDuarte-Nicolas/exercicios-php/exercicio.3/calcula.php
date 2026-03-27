<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado da Operação (POST)</h1>

<?php

if ($op == "+") {
$resultado = $n1 + $n2;

} else if ($op == "-") {
    $resultado = $n1 - $n2;

} else if ($op == "*") {
    $resultado = $n1 * $n2;

} else if ($op == "/") {
    $resultado = $n1 / $n2;
}

?>

<p> O resultado é <?php echo $resultado; ?>. </p>


<a href="exercicio3.php">Voltar</a>

</body>

</html>