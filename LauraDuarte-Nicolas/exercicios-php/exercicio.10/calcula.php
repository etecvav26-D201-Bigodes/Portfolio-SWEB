<?php

$ano = $_POST["ano"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (POST)</title>

</head>

<body>

<h1>Resultado do Calculo (POST)</h1>

<?php

# verificando se é bissexto
if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
?>
<p> O ano é bissexto. </p>

<?php
} else {
 ?>
 <p> O ano não é bissexto. </p>
<?php
}

?>

<a href="exercicio10.php">Voltar</a>

</body>

</html>