<?php

function soma($n) {
    $total = 0;

    for ($i = 0; $i <= $n; $i++) {
        $total += $i;
    }

    return $total;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = (int) $_POST["n"];

    $resultado = soma($n);

    echo "<h1>Resultado</h1>";
    echo "A soma de 0 até $n é: " . $resultado;

} else {
    echo "Acesso inválido.";
}

?>