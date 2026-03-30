<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = $_POST["n"];

    $positivos = [];
    $negativos = [];

    foreach ($numeros as $numero) {
        if ($numero >= 0) {
            $positivos[] = $numero;
        } else {
            $negativos[] = $numero;
        }
    }

    echo "<h2>Números Positivos:</h2>";
    foreach ($positivos as $p) {
        echo $p . " ";
    }

    echo "<br><br>";

    echo "<h2>Números Negativos:</h2>";
    foreach ($negativos as $n) {
        echo $n . " ";
    }

} else {
    echo "Acesso inválido.";
}

?>