<?php

$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$operador = $_POST["operador"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado da Operação</title>
</head>

<body>

<h1>Resultado da Operação</h1>

<?php

if ($operador == "+") {
    $resultado = $numero1 + $numero2;

} elseif ($operador == "-") {
    $resultado = $numero1 - $numero2;

} elseif ($operador == "*") {
    $resultado = $numero1 * $numero2;

} elseif ($operador == "/") {

    if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
    } else {
        $resultado = "Erro: divisão por zero não é permitida.";
    }
}

?>

<p>O resultado da operação é: <strong><?php echo $resultado; ?></strong></p>

</body>
</html>