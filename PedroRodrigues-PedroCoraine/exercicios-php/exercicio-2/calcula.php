<?php

$temperatura = $_POST['temp'];
$unidade = strtoupper($_POST['tipo']);

if ($unidade == "F") {
    // Fahrenheit para Celsius
    $resultado = (5/9) * ($temperatura - 32);
    echo "Temperatura convertida para Celsius: " . $resultado;
}
elseif ($unidade == "C") {
    // Celsius para Fahrenheit
    $resultado = ($temperatura * 9/5) + 32;
    echo "Temperatura convertida para Fahrenheit: " . $resultado;
}
else {
    echo "Informe apenas F ou C!";
}

?>