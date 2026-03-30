<?php

$numero = $_POST["num"];

// sequencia para cada linha
for ($linha = 1; $linha <= $numero; $linha++) {
    
    // sequencia para os números dentro da linha
    for ($coluna = 1; $coluna <= $linha; $coluna++) {
        echo $coluna . " ";
    }

    
    echo "<br>";
}

?>