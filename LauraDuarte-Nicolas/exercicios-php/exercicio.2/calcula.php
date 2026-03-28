<?php

$temp = $_POST["temp"];
$tipo = $_POST["tipo"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>conversão (POST)</title>
</head>

<body>

<h1>Resultado da conversão (POST) </h1>

<?php

if ($tipo == "F") {
    $c = 5/9 * ($temp - 32);
?>
    <p>A temperatura em Celsius é <?php echo $c ?> C.</p>
<?php
} else if ($tipo == "C") {
    $f = ($temp * 9/5) + 32;
?>
    <p>A temperatura em Fahrenheit é <?php echo $f ?> F.</p>
<?php
}

?>

</body>
</html>