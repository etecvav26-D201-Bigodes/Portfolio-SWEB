<?php

function fatorial($numero) {
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = (int) $_POST["n1"];
    $n2 = (int) $_POST["n2"];
    $n3 = (int) $_POST["n3"];
    $n4 = (int) $_POST["n4"];
    $n5 = (int) $_POST["n5"];

    $somaTotal =
        fatorial($n1) +
        fatorial($n2) +
        fatorial($n3) +
        fatorial($n4) +
        fatorial($n5);

    echo "<h1>Resultado</h1>";
    echo "A soma dos fatoriais é: " . $somaTotal;

} else {
    echo "Acesso inválido.";
}

?>