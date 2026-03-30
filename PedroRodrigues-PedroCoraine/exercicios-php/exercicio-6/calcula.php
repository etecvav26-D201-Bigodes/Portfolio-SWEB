<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $quantidade = (int) $_POST["n"];

    $a = 0;
    $b = 1;

    echo "<h1>Sequência de Fibonacci</h1><br>";

    if ($quantidade <= 0) {
        echo "Digite um número maior que 0.";
    } else {

        for ($i = 1; $i <= $quantidade; $i++) {
            echo $a . " ";

            $proximo = $a + $b;
            $a = $b;
            $b = $proximo;
        }
    }

} else {
    echo "Acesso inválido.";
}

?>